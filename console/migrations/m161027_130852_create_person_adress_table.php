<?php

use yii\db\Migration;

/**
 * Handles the creation for table `person_adress`.
 */
class m161027_130852_create_person_adress_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('person_adress', [
            'adress_id' => $this->integer(),
            'person_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('person_adress');
    }
}
