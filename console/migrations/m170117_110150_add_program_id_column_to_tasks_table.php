<?php

use yii\db\Migration;

/**
 * Handles adding program_id to table `tasks`.
 */
class m170117_110150_add_program_id_column_to_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tasks', 'program_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropColumn('tasks', 'program_id');
    }
}
