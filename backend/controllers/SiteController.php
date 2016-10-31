<?php
namespace backend\controllers;

use common\models\User;
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
        return $this->render('questionary');
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
