<?php

use yii\db\Migration;

class m161028_094420_add_main_manager extends Migration
{
    public function up()
    {
        $this->insert('{{%user}}', [
            'username' => 'kcet_manager',
            'password_hash' => '$2y$13$lp4CYZELKF6W5vqwKHDvXuBzWf4akaPHfZDWhWcsBbisNu/a7KwlK', //admin999
            'status' => \common\models\User::STATUS_ACTIVE,
            'email' => 'kcet_manager@mail.ru',
            'created_at' => 1476192012,
            'updated_at' => 1476192012
        ]);

        $auth = Yii::$app->authManager;

        $managerRole = $auth->getRole('main_manager');
        $auth->assign($managerRole, 3);

    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $managerRole = $auth->getRole('main_manager');

        $auth->revoke($managerRole, 3);
    }
}
