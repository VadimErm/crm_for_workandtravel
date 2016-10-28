<?php

use yii\db\Migration;

/**
 * Handles the creation for table `colleges`.
 */
class m161027_130345_create_colleges_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('colleges', [
            'id' => $this->primaryKey(),
            'number' => $this->integer(3),
            'educ_start' => $this->dateTime(),
            'educ_finish' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('colleges');
    }
}
