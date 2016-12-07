<?php
namespace backend\controllers;

use common\models\User;
use common\models\Summary;
use Yii;
use common\models\LoginForm;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends BackendController
{
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
//        var_dump(Yii::$app->request->post());exit;

        $model = new Summary();

//        var_dump(Yii::$app->request->post());exit;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo "<pre>";
            var_dump($model);exit;
            echo "</pre>";
        }

        $role = \Yii::$app->user->getIdentity()->getRole();
        $modelUser = User::findOne(Yii::$app->user->getId());
        $contact = $modelUser
            ->getContact()
            ->select('id')
            ->asArray()
            ->one();

            if ($role == 'student') {
                if(!empty($contact)) {
                    $view = 'index';
                } else {
                   $view  = 'questionary';
                   $model = new Summary; 
                }
            } else {
                $view  = 'index';
            }
        
        return $this->render($view , [
                'model' => $model,
            ]);
        
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

        return $this->goHome();
    }
}
