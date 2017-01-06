<?php


namespace common\helpers;


use common\models\User;

class UserStatusHelper {

    public static function isReject($user_id)
    {

        return User::findOne($user_id)->contact->status == 3 ? true : false;
    }

} 