<?php

use yii\db\Migration;

/**
 * Handles the creation for table `person_phone`.
 */
class m161027_113934_create_person_phone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('person_phone', [
            'person_id' => $this->integer(),
            'phone_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('person_phone');
    }
}
