<?php

namespace common\widgets\file_loader_widget;

use yii\bootstrap\Widget;
use common\helpers\FileLoaderHelper;

class FileLoaderWidget extends Widget
{

    public $userId;
    public $type;
    public $fileId;
    public $edit;

    public function run()
    {
        return $this->render('fileloader', [
            'loaded' => $this->isExists($this->fileId),
            'fileId' => $this->fileId,
            'userId' => $this->userId,
            'type' => $this->type,
            'edit' => ($this->edit) ? true: false,
        ]);
    }

    protected function isExists($fileId = null)
    {
        return FileLoaderHelper::isExistsById($fileId);

    }



}