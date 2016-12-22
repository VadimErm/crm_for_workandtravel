<?php

use yii\db\Migration;

/**
 * Handles adding name to table `ipassports`.
 */
class m161118_134542_add_name_column_to_ipassports_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('ipassports', 'number', $this->string(30));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('ipassports', 'name');
    }
}
