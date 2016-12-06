<?php

use yii\db\Migration;

/**
 * Handles adding issued_country to table `ipassports`.
 */
class m161118_135407_add_issued_country_column_to_ipassports_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('ipassports', 'issued_country', $this->string(30));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('ipassports', 'issued_country');
    }
}
