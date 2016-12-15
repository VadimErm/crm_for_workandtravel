<?php

use yii\db\Migration;

class m161115_154047_kcet_number extends Migration
{
    public function up()
    {
        $this->addColumn('{{%contacts}}', 'kcet_number', $this->string(20));
    }

    public function down()
    {
        $this->dropColumn('{{%contacts}}', 'kcet_number');
    }
}
