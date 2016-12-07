<?php

use yii\db\Migration;

/**
 * Handles the creation for table `jobs`.
 */
class m161027_125442_create_jobs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('jobs', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50),
            'position' => $this->string(20),
            'start_working' => $this->dateTime(),
            'finish_working' => $this->dateTime(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('jobs');
    }
}
