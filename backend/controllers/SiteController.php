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

           return $this->redirect(['site/login']);
        }


        $user = Yii::$app->user->identity;
        $role = $user->getRole();

        /*echo '<pre>';
        var_dump($user->getRole());
        echo '</pre>';
        exit;*/

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
            //var_dump($model->login());exit;
            //return $this->goHome();

            return $this->goBack();
            //return $this->goHome();
           //return $this->redirect('index');
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
