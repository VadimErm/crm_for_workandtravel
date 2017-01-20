<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tasks`.
 */
class m170117_100458_create_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'title' => $this->string(60),
            'content' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tasks');
    }
}
