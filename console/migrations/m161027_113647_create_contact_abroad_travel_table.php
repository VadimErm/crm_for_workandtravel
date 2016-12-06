<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_abroad_travel`.
 */
class m161027_113647_create_contact_abroad_travel_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_abroad_travel', [
            'contact_id' => $this->integer(),
            'abroad_travel_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_abroad_travel');
    }
}
