<?php
namespace backend\controllers;

use common\models\User;
use common\models\Summary;
use Yii;
use common\models\LoginForm;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends BackendController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index'  => ['get'],
                    'questionary'   => ['get', 'post'],
                    'view-summary' => ['get'],
                    'update-summary' => ['get', 'post']

                ],
            ],

            /*'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' =>['index','questionary', 'view-summary'],
                        'roles' => ['student', 'manager', 'main_manager']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['update-summary'],
                        'roles' => ['manager']

                    ]
                ]
            ]*/
        ];
    }

    public function actionIndex()
    {
        $authManager = Yii::$app->authManager;

        $role = $authManager->getRolesByUser(Yii::$app->user->getId());

        return $this->render('index', ['role' => $role]);
    }

    public function actionAgreement()
    {
        return $this->renderAjax('agreement_modal');
    }

    public function actionQuestionary()
    {
        $authManager = Yii::$app->authManager;

        $model = new Summary();
        $role = \Yii::$app->user->getIdentity()->getRole();
        $modelUser = User::findOne(Yii::$app->user->getId());



        if ($model->load(Yii::$app->request->post()) && $model->save() ) {

            $this->redirect(['view-summary', 'user_id' => $modelUser->id]);
            /*echo "<pre>";
            var_dump($model);
            exit;
            echo "</pre>";*/
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
        } else {
            $view  = 'index';
        }
        
        return $this->render('questionary' , [
            'model' => $model,
        ]);
        
    }
    public function actionViewSummary($user_id)
    {
        $model = Summary::getSummary($user_id);
       // var_dump($model);
       // exit;

        return $this->render('viewSummary', [
                'model' =>$model,
            ]);

    }

    public function actionUpdateSummary($user_id)
    {
        $model = Summary::getSummary($user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save(true, $user_id)) {

            //var_dump($model);exit;
            return $this->redirect(['update-summary', 'user_id' => $user_id]);

        } else {

        //var_dump($model);exit;
            return $this->render('updateSummary', [
                'model' => $model,
            ]);
        }


    }

    public function actionDocuments()
    {
        
        return $this->render('documents');
    }

    public function actionLogin()
    {
        $this->layout = 'login';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect('login');
    }
}
