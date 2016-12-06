<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_sibling`.
 */
class m161027_115144_create_contact_sibling_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_sibling', [
            'contact_id' => $this->integer(),
            'subling_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_sibling');
    }
}
