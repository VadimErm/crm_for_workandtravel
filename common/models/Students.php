<?php


namespace common\models;


use yii\base\Model;


class Students extends Model
{
        public static $users;
        public static $students;
        public static $studentsName;



    public static function getStudentsInstances()
    {
        self::$users = User::getUsersByRole('student');

        foreach (self::$users as $user) {
            if(!is_null($user->getContact()->one())){
                self::$students[$user->getId()] = $user->getContact()->one();
            } else {
                self::$students[$user->getId()] = $user;
            }
        }

        return self::$students;

    }

    public static function getStudentsNames()
    {
        $studentsInstances = self::getStudentsInstances();

        foreach ($studentsInstances as $id => $studentsInstance){
            if($studentsInstance instanceof Contact){
                self::$studentsName[$id] = $studentsInstance->fullname;
            } elseif ($studentsInstance instanceof User) {
                self::$studentsName[$id] = $studentsInstance->username;
            }
        }

        return self::$studentsName;


    }

}