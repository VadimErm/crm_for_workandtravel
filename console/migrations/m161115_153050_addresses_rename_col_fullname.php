<?php

use yii\db\Migration;

class m161115_153050_addresses_rename_col_fullname extends Migration
{
    public function up()
    {
        $this->renameColumn('{{%addresses}}', 'fullname', 'type');
    }

    public function down()
    {
        $this->renameColumn('{{%addresses}}', 'type', 'fullname');
    }
}
