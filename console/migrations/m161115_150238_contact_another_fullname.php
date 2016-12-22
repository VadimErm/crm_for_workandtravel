<?php

use yii\db\Migration;

class m161115_150238_contact_another_fullname extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contacts}}', 'another_fullname', $this->string(70));
    }

    public function down()
    {
        $this->dropColumn('{{%contacts}}', 'another_fullname');
    }
}
