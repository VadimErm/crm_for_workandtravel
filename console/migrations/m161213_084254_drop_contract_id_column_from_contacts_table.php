<?php

use yii\db\Migration;

/**
 * Handles dropping contract_id from table `contacts`.
 */
class m161213_084254_drop_contract_id_column_from_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('contacts', 'contract_id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('contacts', 'contract_id', $this->integer());
    }
}
