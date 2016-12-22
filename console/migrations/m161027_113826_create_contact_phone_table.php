<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_phone`.
 */
class m161027_113826_create_contact_phone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_phone', [
            'contact_id' => $this->integer(),
            'phone_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_phone');
    }
}
