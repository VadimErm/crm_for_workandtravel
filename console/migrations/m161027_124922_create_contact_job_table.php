<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_job`.
 */
class m161027_124922_create_contact_job_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_job', [
            'contact_id' => $this->integer(),
            'job_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_job');
    }
}
