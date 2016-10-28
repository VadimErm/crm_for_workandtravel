<?php

use yii\db\Migration;

/**
 * Handles the creation for table `phone_types`.
 */
class m161027_115239_create_phone_types_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('phone_types', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('phone_types');
    }
}
