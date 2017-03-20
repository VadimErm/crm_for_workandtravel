<?php

use yii\db\Migration;

/**
 * Handles adding attachment to table `tasks`.
 */
class m170317_093444_add_attachment_column_to_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tasks', 'attachment', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('tasks', 'attachment');
    }
}
