<?php

namespace files\components;

use files\models\File;
use yii\base\Component;

class FileLoader extends Component
{
    private $_fileModel;

    public function __construct(array $config = [], File $file)
    {
        $this->_fileModel = $file;

        parent::__construct($config);
    }

    public $bla;

    public function getById($id)
    {

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