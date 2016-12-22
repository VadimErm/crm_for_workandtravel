<?php

use yii\db\Migration;

/**
 * Handles adding depdean_fullname to table `universities`.
 */
class m161118_144943_add_depdean_fullname_column_to_universities_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('universities', 'depdean_fullname', $this->string(35));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('universities', 'depdean_fullname');
    }
}
