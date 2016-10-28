<?php

namespace files\components;

use common\models\File;
use yii\base\Component;
use yii\filters\auth\AuthInterface;
use yii\rbac\DbManager;
use common\models\User;

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

    public function getById($id)
    {
        $files = $this->_fileModel->findOne($id);
    }
    public function bla()
    {
        if (file_exists($file)) {
            // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
            // если этого не сделать файл будет читаться в память полностью!
            if (ob_get_level()) {
                ob_end_clean();
            }
            // заставляем браузер показать окно сохранения файла
            header('Content-Description: File Transfer');
            header('Content-Type: ' . $mineType);
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            // читаем файл и отправляем его пользователю
            if ($fd = fopen($file, 'rb')) {
                while (!feof($fd)) {
                    print fread($fd, 1024);
                }
                fclose($fd);
            }
            exit;
        } else {
            throw new \Exception('File is not exists');
        }
    }
}