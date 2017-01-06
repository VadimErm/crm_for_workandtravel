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


        ];
    }

    public function actionIndex()
    {
        if(Yii::$app->user->isGuest){
            $this->redirect(['site/login']);
        }
        $authManager = Yii::$app->authManager;

        $role = $authManager->getRolesByUser(Yii::$app->user->getId());

        return $this->render('index', ['role' => $role]);
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

        return $this->redirect(['site/login']);
    }
}
