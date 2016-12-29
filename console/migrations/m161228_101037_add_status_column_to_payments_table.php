<?php

use yii\db\Migration;

/**
 * Handles adding status to table `payments`.
 */
class m161228_101037_add_status_column_to_payments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('payments', 'status', $this->integer(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('payments', 'status');
    }
}
