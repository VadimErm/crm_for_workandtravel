<?php

namespace backend\controllers;

use common\helpers\UserStatusHelper;
use common\models\ContactSearch;
use common\models\Summary;
use common\models\UserTask;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use backend\models\ContactForm;
use common\models\User;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use common\models\Program;
use common\models\Agreement;
use yii\helpers\ArrayHelper;
use common\models\Contact;
use Yii;
use yii\web\NotFoundHttpException;

class StudentController extends BackendController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['manager', 'main_manager']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index', 'students'],
                        'roles' => ['director','main_manager', 'manager' ]
                    ],
                    [
                        'allow' => true,
                        'actions' => ['reset-password'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['questionary', 'documents', 'view-summary'],
                        'roles' => ['student']
                    ],


                ]
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index'  => ['get'],
                    'questionary'   => ['get', 'post'],
                    'view-summary' => ['get'],
                    'update-summary' => ['get', 'post'],
                    'change-status' => ['post']

                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $role = \Yii::$app->user->getIdentity()->getRole();

        $view = $role == 'director' ? 'students_for_director' : 'index';

        return $this->render($view);
    }

    public function actionAdd()
    {
        $model = new ContactForm();
        $programs = Program::find()->asArray()->all();
        $data = ArrayHelper::map($programs,'id', 'title');

        if ($model->load(\Yii::$app->request->post()) ) {

            $password = \Yii::$app->security->generateRandomString(5);
            $auth = \Yii::$app -> authManager;
            $user = new User;
            $user->username = $model->email;
            $user->email = $model->email;

            if (empty($model->program_id)) {

                $user->program_id = 0;

            } else {

                $user->program_id = (int) $model->program_id;

            }

            $user->setPassword($password);
            $user->generateAuthKey();
            if ($user->save()) {

                $auth = \Yii::$app->authManager;
                $studentRole = $auth->getRole('student');
                $auth->assign($studentRole, $user->getId()); 

                $passwordResetModel = new PasswordResetRequestForm();

                if ($passwordResetModel->sendEmail($user)) {

                    \Yii::$app->session->setFlash('success', 'The passwordreset was successfully send to new student mail.');
                    return $this->redirect(['student/add']);
                    //return $this->refresh();
                }
            } else {

                    \Yii::$app->session->setFlash('error', 'Sorry, this mail are allready exists.');
                    return $this->redirect(['student/add']);
                    //return $this->refresh();
            }
     
        }
    
        return $this->render('new', [
            'model' => $model,
            'data' => $data,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(\Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            \Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();

        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionStudents()
    {
        $role = \Yii::$app->user->getIdentity()->getRole();

        $view = $role == 'director' ? 'students_for_director' : 'students';

        $searchModel = new ContactSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);


        return $this->render($view, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }



    public function actionViewSummary($user_id)
    {
        $model = Summary::getSummary($user_id);

        return $this->render('viewSummary', [
            'model' =>$model,
        ]);

    }

    public function actionUpdateSummary($user_id)
    {
        $model = Summary::getSummary($user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save(true, $user_id)) {


            return $this->redirect(['update-summary', 'user_id' => $user_id]);

        } else {

            return $this->render('updateSummary', [
                'model' => $model,
            ]);
        }


    }

    public function actionDocuments($user_id = null)
    {
        if ($user_id == null) {
            $user_id = \Yii::$app->user->getId();
        }

        return $this->render('documents', [
            'user_id' => $user_id
        ]);
    }

    public function actionQuestionary()
    {

        $model = new Summary();
        $role = \Yii::$app->user->getIdentity()->getRole();
        $modelUser = User::findOne(Yii::$app->user->getId());


        if ($model->load(Yii::$app->request->post()) && $model->save() ) {

            $this->redirect(['view-summary', 'user_id' => $modelUser->id]);

        }

        $contact = $modelUser
            ->getContact()
            ->select('id')
            ->asArray()
            ->one();

        if ($role == 'student') {
            if(!empty($contact)) {

                $this->redirect(['view-summary', 'user_id' => $modelUser->id]);

            } else {
                $model = new Summary();
            }
        }

        return $this->render('questionary' , [
            'model' => $model,
        ]);

    }

    public function actionChangeStatus()
    {
        $contactId = Yii::$app->request->post('contact');

        if (($model = Contact::findOne($contactId)) !== null) {

            if($model->load(Yii::$app->request->post()) && $model->save()) {

                $this->redirect('students');
            }

        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }


    }

    public function actionStudentsTask($taskId)
    {

        $dataProvider = new ActiveDataProvider([
            'query' => UserTask::find()->where(['task_id' =>$taskId]),
            'pagination' => [
                'pageSize' => 5
            ]
        ]);
       /* echo "<pre>";
       var_dump($userTask[0]->user);
       echo "</pre>" ;
       exit;*/

       return $this->render('student_task', [
           'dataProvider' => $dataProvider
       ]);
    }
}