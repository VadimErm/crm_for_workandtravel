<?php

namespace backend\controllers;

use yii\base\InvalidParamException;
use yii\filters\AccessControl;
use backend\models\ContactForm;
use common\models\User;
use backend\models\PasswordResetRequestForm;
use backend\models\ResetPasswordForm;
use yii\web\BadRequestHttpException;
use common\models\Program;
use common\models\Agreement;
use yii\helpers\ArrayHelper;

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
                        'roles' => ['main_manager', 'manager'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['director']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['reset-password'],
                    ]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $role = \Yii::$app->user->getIdentity()->getRole();

        $view = $role == 'director' ? 'index_for_manager' : 'index';

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

    public function actionApplicants()
    {
        return $this->render('students', ['title' => 'Applicants']);
    }

    public function actionParticipants()
    {
        return $this->render('students', ['title' => 'Participants']);
    }
}