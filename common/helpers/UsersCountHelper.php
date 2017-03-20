<?php


namespace common\helpers;


use common\models\Contact;
use common\models\User;

class UsersCountHelper
{
    public static function getUsersOnlineCount()
    {
        $time = time()- 900;
        $count =  User::find()->where(['>', 'log_time', $time])->count();
        return $count;

    }

    public static function getApplicantsCount()
    {

        return Contact::find()->where(['status' => Contact::APPLICANT])->count();
    }

    public static function getParticipantsCount()
    {
        return Contact::find()->where(['status' => Contact::PARTICIPANT])->count();
    }
} 