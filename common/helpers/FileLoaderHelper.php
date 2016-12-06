<?php

namespace common\helpers;

use files\components\FileLoader;
use Yii;

class FileLoaderHelper
{
    public static function isExists($type, $user_id = null)
    {
        if ($user_id == null) {
            $user_id = Yii::$app->user->getId();
        }

        return FileLoader::isExists($user_id, $type);
    }
}