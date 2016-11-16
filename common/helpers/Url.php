<?php

namespace common\helpers;

class Url extends \yii\helpers\Url
{
    public static function filePush()
    {
        return "/files/file/push?access-token=" . \Yii::$app->user->identity->getAccessToken();
    }

    public static function fileGet()
    {

    }
}