<?php

use yii\db\Migration;

class m161028_150331_user_access_token extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'access_token', $this->string());
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'access_token');
    }
}
