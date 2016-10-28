<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_person`.
 */
class m161027_152227_create_contact_person_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_person', [
            'contact_id' => $this->integer(),
            'person_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_person');
    }
}
