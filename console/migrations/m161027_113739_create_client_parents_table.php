<?php

use yii\db\Migration;

/**
 * Handles the creation for table `parents`.
 */
class m161027_113739_create_client_parents_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('client_parents', [
            'id' => $this->primaryKey(),
            'type' => $this->integer(1),
            'birth' => $this->dateTime(),
            'birth_country' => $this->string(20),
            'fullname' => $this->string(20),           
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('parents');
    }
}
