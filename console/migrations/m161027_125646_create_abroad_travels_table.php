<?php

use yii\db\Migration;

/**
 * Handles the creation for table `abroad_travels`.
 */
class m161027_125646_create_abroad_travels_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('abroad_travels', [
            'id' => $this->primaryKey(),
            'country' => $this->string(20),
            'visa_type' => $this->integer(),   
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('abroad_travels');
    }
}
