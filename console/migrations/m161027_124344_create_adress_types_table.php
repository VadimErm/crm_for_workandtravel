<?php

use yii\db\Migration;

/**
 * Handles the creation for table `adress_types`.
 */
class m161027_124344_create_adress_types_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('adress_types', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('adress_types');
    }
}
