<?php

namespace files\components;

use common\models\File;
use yii\base\Component;
use yii\filters\auth\AuthInterface;
use yii\helpers\BaseFileHelper;
use yii\rbac\DbManager;
use common\models\User;
use yii\web\NotFoundHttpException;

class FileLoader extends Component
{
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

    public function getById($id, $type = 1)
    {
        $fileModel = $this->_fileModel
            ->find(['id' => $id])
            ->andWhere(['user_id' => \Yii::$app->user->getId()])
            ->one();

        if ($fileModel) {
            $path = \Yii::getAlias($fileModel->path);

            $this->getFile($path);
        }
    }

    protected function getFile($path)
    {
        if (file_exists($path)) {
            \Yii::$app->response->sendFile($path, basename($path));
        } else {
            throw new NotFoundHttpException('File not found');
        }
    }
}