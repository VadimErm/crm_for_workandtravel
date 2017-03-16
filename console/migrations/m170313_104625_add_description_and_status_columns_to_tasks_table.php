<?php

use yii\db\Migration;

/**
 * Handles adding description_and_destination_and_status to table `tasks`.
 */
class m170313_104625_add_description_and_destination_and_status_columns_to_tasks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tasks', 'description', $this->text());
        $this->addColumn('tasks', 'destination', $this->integer(1));
        $this->addColumn('tasks', 'status', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('tasks', 'description');
        $this->dropColumn('tasks', 'destination');
        $this->dropColumn('tasks', 'status');

    }
}
