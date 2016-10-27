<?php

use yii\db\Migration;

/**
 * Handles the creation for table `universities`.
 */
class m161027_130416_create_universities_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('universities', [
            'id' => $this->primaryKey(),
            'name' => $this->string(40),
            'department' => $this->string(30),
            'group' => $this->string(10),
            'course' => $this->integer(1),
            'dean_fullname' => $this->string(30),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('universities');
    }
}
