<?php

use yii\db\Migration;

/**
 * Handles the creation for table `cards`.
 */
class m161027_125301_create_cards_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('cards', [
            'id' => $this->primaryKey(),
            'issue_date' => $this->dateTime(),
            'name' => $this->string(100),
            'issued_by' => $this->string(100)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('cards');
    }
}
