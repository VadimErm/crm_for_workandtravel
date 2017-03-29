<?php

namespace files\controllers;

use common\models\File;
use files\components\FileLoader;
use yii\base\Module;
use yii\filters\auth\QueryParamAuth;
use yii\filters\VerbFilter;
use yii\rest\Controller;
use yii\web\UploadedFile;

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


            if ($id = \Yii::$app->fileLoader->pushFile($type, $user_id)) {
                return ['status' => 'success', 'id' => $id];
            }


        return ['status' => 'fail'];


    }

    public function actionUpload($type, $user_id = null)
    {

        if (isset($_FILES['file'])) {
            $file = UploadedFile::getInstanceByName('file');

            $path = '@files/data/' . md5(time()) . substr($file->name, -4, 4);

            $fileModel = new File();

            if ($file->saveAs(\Yii::getAlias($path))) {

                $fileModel->path = $path;
                $fileModel->setType($type);
                $fileModel->user_id = $user_id;

                echo \yii\helpers\Json::encode($file);
            }
        }

        return false;
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