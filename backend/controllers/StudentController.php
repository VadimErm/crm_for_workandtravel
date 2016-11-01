<?php

namespace backend\controllers;

use yii\filters\AccessControl;

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
        return $this->render('new');
    }
}