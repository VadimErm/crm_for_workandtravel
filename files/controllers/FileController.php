<?php

namespace files\controllers;

use files\components\FileLoader;
use yii\base\Module;
use yii\filters\auth\QueryParamAuth;
use yii\rest\Controller;

class FileController extends Controller
{
    /**
     * @var $_fileLoader FileLoader
     */
    private $_fileLoader;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
    }

    public function __construct($id, Module $module, array $config = [], FileLoader $fileLoader)
    {
        parent::__construct($id, $module, $config);

        $this->_fileLoader = $fileLoader;
        \Yii::$app->user->enableSession = false;
    }

    public function actionIndex($id, $type = 1)
    {
        $this->actionGet($id, $type);
    }

    public function actionGet($id, $type = 1)
    {
        // Start download file
        $this->_fileLoader->getById($id, $type);
    }
}