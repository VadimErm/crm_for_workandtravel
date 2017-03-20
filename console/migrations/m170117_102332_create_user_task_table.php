<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user_task`.
 */
class m170117_102332_create_user_task_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('user_task', [
            'user_id' => $this->integer(),
            'task_id' => $this->integer(),
            'status' => $this->integer(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_task');
    }
}
