<?php

use yii\db\Migration;

class m161115_154228_kcet_date extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contacts}}', 'kcet_date', $this->date());
    }

    public function down()
    {
        $this->dropColumn('{{%contacts}}', 'kcet_date');
    }
}
