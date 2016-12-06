<?php

use yii\db\Migration;

class m161027_124020_add_manager extends Migration
{
    public function up()
    {
        $this->insert('{{%user}}', [
            'username' => 'manager',
            'password_hash' => '$2y$13$lp4CYZELKF6W5vqwKHDvXuBzWf4akaPHfZDWhWcsBbisNu/a7KwlK', //admin999
            'status' => \common\models\User::STATUS_ACTIVE,
            'email' => 'manager@mail.ru',
            'created_at' => 1476192012,
            'updated_at' => 1476192012
        ]);

        $auth = Yii::$app->authManager;

        $managerRole = $auth->getRole('manager');
        $auth->assign($managerRole, 2);

    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $managerRole = $auth->getRole('manager');

        $auth->revoke($managerRole, 2);
    }
}
