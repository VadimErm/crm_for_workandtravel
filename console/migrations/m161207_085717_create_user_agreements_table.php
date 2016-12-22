<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user_agreements`.
 */
class m161207_085717_create_user_agreements_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_agreements', [
            'user_id' => $this->integer(),
            'agreements_id' => $this->integer(),
            'approved' => $this->boolean()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_agreements');
    }
}
