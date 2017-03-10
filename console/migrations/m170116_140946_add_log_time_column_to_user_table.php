<?php

use yii\db\Migration;

/**
 * Handles adding log_time to table `user`.
 */
class m170116_140946_add_log_time_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'log_time', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'log_time');
    }
}
