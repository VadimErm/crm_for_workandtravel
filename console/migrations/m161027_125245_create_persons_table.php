<?php

use yii\db\Migration;

/**
 * Handles the creation for table `persons`.
 */
class m161027_125245_create_persons_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('persons', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(20),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('persons');
    }
}
