<?php

namespace files\components;

use common\models\File;
use yii\base\Component;
use yii\filters\auth\AuthInterface;
use yii\helpers\BaseFileHelper;
use yii\rbac\DbManager;
use common\models\User;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class FileLoader extends Component
{
    const UPLOAD_DIR = '@files/data/';
    /**
     * @var $_fileModel File
     */
    private $_fileModel;

    /**
     * @var $_authManager AuthInterface
     */
    private $_authManager;

    /**
     * @var $_user User
     */
    private $_user;

    public function __construct(array $config = [], File $file, DbManager $authManager)
    {
        $this->_fileModel = $file;
        $this->_authManager = $authManager;
        $this->_user = \Yii::$app->user;

        parent::__construct($config);

    }

    public function getFile($user_id, $type, $own = true)
    {
        if ($own && \Yii::$app->user->getId() != $user_id) {
            throw new ForbiddenHttpException('You don\'t have permission');
        }

        $fileModel = $this->_fileModel
            ->find(['user_id' => $user_id])
            ->andWhere(['type' => $type])
            ->one();

        if ($fileModel) {
            $path = \Yii::getAlias($fileModel->path);
            $this->sendFile($path);
        } else {
            throw new NotFoundHttpException("File not found");
        }
    }

    protected function sendFile($path)
    {
        if (file_exists($path)) {
            \Yii::$app->response->sendFile($path, basename($path));
        } else {
            throw new NotFoundHttpException('File not found');
        }
    }

    public function pushFile($type)
    {
        $file = UploadedFile::getInstanceByName('file');

        if (!empty($file)) {
            $path = self::UPLOAD_DIR . md5(time()) . substr($file->name, -4, 4);

            $save = $file->saveAs(\Yii::getAlias($path));

            if ($save) {
                $this->_fileModel->path = $path;
                $this->_fileModel->setType($type);
                $this->_fileModel->user_id = \Yii::$app->user->getId();

                return $this->_fileModel->save() ? $this->_fileModel->getPrimaryKey() : false;
            } else {
                return false;
            }
        }

        return false;
    }

    public function removeFile($id)
    {
        $file = $this->_fileModel->findOne($id);

        if (empty($file)) {
            return false;
        }

        unlink($file->path);
        return $file->delete();
    }
}