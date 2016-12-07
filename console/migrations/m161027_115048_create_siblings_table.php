<?php

use yii\db\Migration;

/**
 * Handles the creation for table `siblings`.
 */
class m161027_115048_create_siblings_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('siblings', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(30), 
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('siblings');
    }
}
