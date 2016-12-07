<?php

use yii\db\Migration;

/**
 * Handles the creation for table `phone`.
 */
class m161027_113800_create_phones_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('phones', [
            'id' => $this->primaryKey(),
            'type' => $this->integer(2),
            'number' => $this->string(10),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('phone');
    }
}
