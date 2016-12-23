<?php

use yii\db\Migration;

/**
 * Handles adding year to table `programs`.
 */
class m161222_140608_add_year_column_to_programs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('programs', 'year', $this->integer(4));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('programs', 'year');
    }
}
