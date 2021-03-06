<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_adress`.
 */
class m161027_113617_create_contact_address_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_address', [
            'contact_id' => $this->integer(),
            'address_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_adress');
    }
}
