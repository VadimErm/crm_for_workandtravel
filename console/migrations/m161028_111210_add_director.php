<?php

use yii\db\Migration;

class m161028_111210_add_director extends Migration
{
    public function up()
    {
        $this->insert('{{%user}}', [
            'username' => 'director',
            'password_hash' => '$2y$13$lp4CYZELKF6W5vqwKHDvXuBzWf4akaPHfZDWhWcsBbisNu/a7KwlK', //admin999
            'status' => \common\models\User::STATUS_ACTIVE,
            'email' => 'director@mail.ru',
            'created_at' => 1476192012,
            'updated_at' => 1476192012
        ]);

        $auth = Yii::$app->authManager;

        $managerRole = $auth->getRole('director');
        $auth->assign($managerRole, 4);

    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $managerRole = $auth->getRole('director');

        $auth->revoke($managerRole, 4);
    }
}
