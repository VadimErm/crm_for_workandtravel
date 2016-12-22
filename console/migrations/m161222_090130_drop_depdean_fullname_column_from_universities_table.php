<?php

use yii\db\Migration;

/**
 * Handles dropping depdean_fullname from table `universities`.
 */
class m161222_090130_drop_depdean_fullname_column_from_universities_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('universities', 'depdean_fullname');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('universities', 'depdean_fullname', $this->string(35));
    }
}
