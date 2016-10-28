<?php

use yii\db\Migration;

/**
 * Handles the creation for table `adresses`.
 */
class m161027_125356_create_addresses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('addresses', [
            'id' => $this->primaryKey(),
            'fullname' => $this->integer(),
            'address' => $this->string(100)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('adresses');
    }
}
