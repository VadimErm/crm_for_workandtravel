<?php

use yii\db\Migration;

/**
 * Handles the creation for table `parent_adress`.
 */
class m161027_124453_create_parent_adress_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('parent_adress', [
            'adress_id' => $this->integer(),
            'parent_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('parent_adress');
    }
}
