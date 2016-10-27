<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'gentelella';

        return $this->render('index');
    }

    public function actionAgreement()
    {
        return $this->renderAjax('agreement_modal');
    }

    public function actionQuestionary()
    {
        $this->layout = 'gentelella';

        return $this->render('questionary');
    }

    public function actionDocuments()
    {
        $this->layout = 'gentelella';

        return $this->render('documents');
    }

    public function actionLogin()
    {
        $this->layout = 'login';

        $model = new LoginForm();

        return $this->render('login', ['model' => $model]);
    }
}
