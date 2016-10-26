<?php

namespace files\controllers;

use files\components\FileLoader;
use yii\base\Module;
use yii\web\Controller;

class FileController extends Controller
{
    private $_fileLoader;

    public function __construct($id, Module $module, array $config = [], FileLoader $fileLoader)
    {
        $this->_fileLoader = $fileLoader;

        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {
        var_dump($this->_fileLoader);
        return 'File controller';
    }

    public function actionGet($id)
    {

    }
}