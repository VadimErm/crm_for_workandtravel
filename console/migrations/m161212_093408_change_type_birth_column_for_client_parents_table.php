<?php

use yii\db\Migration;

class m161212_093408_change_type_birth_column_for_client_parents_table extends Migration
{
    public function up()
    {
        return $this->alterColumn('client_parents', 'birth', $this->date());

    }

    public function down()
    {
        return $this->alterColumn('client_parents', 'birth', $this->dateTime());
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
