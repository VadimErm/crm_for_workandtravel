<?php

use yii\db\Migration;

/**
 * Handles the creation for table `agencies`.
 */
class m161031_104253_create_agencies_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('agencies', [
            'id' => $this->primaryKey(),
            'title' => $this->string(20),
            'type' => $this->integer(1)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('agencies');
    }
}
