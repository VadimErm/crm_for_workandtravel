<?php


namespace common\helpers;


use common\models\User;

class UserStatusHelper {

    public static function isReject($user_id)
    {

        $contact = User::findOne($user_id)->contact;
        if(isset($contact)){
            $contact->status == 3 ? true : false;
        } else {
            return false;
        }

    }

} 