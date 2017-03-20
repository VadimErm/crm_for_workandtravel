<?php

use yii\db\Migration;

class m161206_142054_add_program_id_to_agreements_table extends Migration
{
    public function up()
    {
        $this->addColumn('agreements', 'program_id', $this->integer());

    }

    public function down()
    {
        $this->dropColumn('agreements', 'program_id');
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
