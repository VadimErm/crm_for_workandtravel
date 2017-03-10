<?php

namespace files\controllers;

use files\components\FileLoader;
use yii\base\Module;
use yii\filters\auth\QueryParamAuth;
use yii\filters\VerbFilter;
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

    public function actionGet($user_id, $type)
    {

        $this->_fileLoader->getFile($user_id, $type);

    }

    public function actionGetById($id)
    {
        $this->_fileLoader->getFile($id);
    }

    public function actionPush()

    {

        $type = key(\Yii::$app->request->post());

        if (empty(\Yii::$app->request->post()['user_id'])){
            $user_id = null;
        } else {
            $user_id = \Yii::$app->request->post()['user_id'];
        }


            if ($id = $this->_fileLoader->pushFile($type, $user_id)) {
                return ['status' => 'success', 'id' => $id];
            }


        return ['status' => 'fail'];


    }

    public function actionRemove($id)
    {
        if ($this->_fileLoader->removeFile($id)) {
            return ['status' => 'success'];
        } else {
            return ['status' => 'fail'];
        }
    }
}