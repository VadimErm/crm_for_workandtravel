<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_parents`.
 */
class m161027_125056_create_contact_parent_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_parent', [
            'contact_id' => $this->integer(),
            'parent_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_parents');
    }
}
