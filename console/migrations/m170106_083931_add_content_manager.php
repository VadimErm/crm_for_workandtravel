<?php

use yii\db\Migration;

class m170106_083931_add_content_manager extends Migration
{
    public function up()
    {
        $this->insert('{{%user}}', [
            'id' => 5,
            'username' => 'content_manager',
            'password_hash' => '$2y$13$lp4CYZELKF6W5vqwKHDvXuBzWf4akaPHfZDWhWcsBbisNu/a7KwlK', //admin999
            'status' => \common\models\User::STATUS_ACTIVE,
            'email' => 'content_manager@mail.ru',
            'created_at' => 1476192012,
            'updated_at' => 1476192012
        ]);

        $auth = Yii::$app->authManager;

        $contentManagerRole = $auth->getRole('content_manager');
        $auth->assign($contentManagerRole, 5);

    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $contentManagerRole = $auth->getRole('content_manager');

        $auth->revoke($contentManagerRole, 5);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
