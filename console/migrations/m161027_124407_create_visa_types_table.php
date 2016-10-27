<?php

use yii\db\Migration;

/**
 * Handles the creation for table `visa_types`.
 */
class m161027_124407_create_visa_types_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('visa_types', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('visa_types');
    }
}
