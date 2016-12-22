<?php

use yii\db\Migration;

/**
 * Handles adding depdean to table `universities`.
 */
class m161221_100434_add_depdean_column_to_universities_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('universities', 'depdean', $this->boolean());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('universities', 'depdean');
    }
}
