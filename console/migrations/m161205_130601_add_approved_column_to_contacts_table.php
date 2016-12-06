<?php

use yii\db\Migration;

/**
 * Handles adding approved to table `contacts`.
 */
class m161205_130601_add_approved_column_to_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('contacts', 'approved', $this->boolean());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('contacts', 'approved');
    }
}
