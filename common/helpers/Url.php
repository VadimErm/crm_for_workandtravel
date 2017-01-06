<?php

namespace common\helpers;

use common\models\File;

class Url extends \yii\helpers\Url
{
    public static function filePush()
    {

        return "/files/file/push?&access-token=" . \Yii::$app->user->identity->getAccessToken();
    }

    /**
     * @return string
     * if two arguments - first arg: file type, second: user id;
     * if one argument - file id
     */
    public static function fileGet()
    {
        if(func_num_args() == 2 ){

            $user_id = func_get_arg(1);
            $type = File::getType(func_get_arg(0));

            if ($user_id == null) {
                $user_id = \Yii::$app->user->getId();
            }

            return "/files/file/get?user_id=$user_id&type=$type&access-token=" . \Yii::$app->user->identity->getAccessToken();

        } elseif (func_num_args() == 1) {

            $id = func_get_arg(0);

            return "/files/file/get-by-id?id=$id&access-token=" . \Yii::$app->user->identity->getAccessToken();

        }

    }


}