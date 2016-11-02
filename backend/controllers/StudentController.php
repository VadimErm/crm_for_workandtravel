<?php

namespace backend\controllers;

use yii\filters\AccessControl;
use backend\models\ContactForm;

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
        //$model = new ContactForm();
         //echo Yii::$app->request->post();
         //exit;
         //if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            //Yii::$app->session->setFlash('contactFormSubmitted');
            //echo "hello";
            //exit;
          //  return $this->refresh();
        //}



        //return $this->render('new', [
        //    'model' => $model,
        //]);
    }
}