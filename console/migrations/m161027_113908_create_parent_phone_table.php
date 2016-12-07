<?php

use yii\db\Migration;

/**
 * Handles the creation for table `parent_phone`.
 */
class m161027_113908_create_parent_phone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('parent_phone', [
            'parent_id' => $this->integer(),
            'phone_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('parent_phone');
    }
}
