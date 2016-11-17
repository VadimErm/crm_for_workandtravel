<?php

namespace common\helpers;

use common\models\File;

class Url extends \yii\helpers\Url
{
    public static function filePush()
    {
        return "/files/file/push?access-token=" . \Yii::$app->user->identity->getAccessToken();
    }

    public static function fileGet($type, $user_id = null)
    {
        $type = File::getType($type);

        if ($user_id == null) {
            $user_id = \Yii::$app->user->getId();
        }

        return "/files/file/get?user_id=$user_id&type=$type&access-token=" . \Yii::$app->user->identity->getAccessToken();
    }
}