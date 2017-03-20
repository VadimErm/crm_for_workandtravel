<?php

use yii\db\Migration;

/**
 * Handles adding price to table `programs`.
 */
class m161227_142242_add_price_column_to_programs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('programs', 'price', $this->float());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('programs', 'price');
    }
}
