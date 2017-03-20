<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contracts`.
 */
class m161227_105555_create_contracts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('contracts', [
            'kcet_number' => $this->string(20),
            'program_id' => $this->integer(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contracts');
    }
}
