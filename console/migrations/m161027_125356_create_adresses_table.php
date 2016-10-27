<?php

use yii\db\Migration;

/**
 * Handles the creation for table `adresses`.
 */
class m161027_125356_create_adresses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('adresses', [
            'id' => $this->primaryKey(),
            'fullname' => $this->integer(),
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
