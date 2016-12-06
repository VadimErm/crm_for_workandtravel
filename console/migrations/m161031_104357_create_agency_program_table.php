<?php

use yii\db\Migration;

/**
 * Handles the creation for table `agency_program`.
 */
class m161031_104357_create_agency_program_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('agency_program', [
            'program_id' => $this->integer(),
            'agency_id' => $this->integer()
         ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('agency_program');
    }
}
