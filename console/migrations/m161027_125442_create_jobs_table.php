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
            'company_name' => $this->string(50),
            'position' => $this->string(50),
            'start_working' => $this->string(7),
            'finish_working' => $this->string(7),
            
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
