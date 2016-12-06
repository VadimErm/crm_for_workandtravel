<?php

use yii\db\Migration;

/**
 * Handles the creation for table `programs`.
 */
class m161031_104224_create_programs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('programs', [
            'id' => $this->primaryKey(),
            'title' => $this->string(20)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('programs');
    }
}
