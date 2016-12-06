<?php

use yii\db\Migration;

/**
 * Handles dropping dean_type from table `universities`.
 */
class m161118_144701_drop_dean_type_column_from_universities_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('universities', 'dean_type');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('universities', 'dean_type', $this->integer(1));
    }
}
