<?php

use yii\db\Migration;

class m161027_094608_assign_student extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        $studentRole = $auth->getRole('student');
        $auth->assign($studentRole, 1);

    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $studentRole = $auth->getRole('student');

        $auth->revoke($studentRole, 1);
    }
}
