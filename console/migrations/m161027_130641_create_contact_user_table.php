<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_user`.
 */
class m161027_130641_create_contact_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact_user', [
            'user_id' => $this->integer(),
            'contact_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_user');
    }
}
