<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user_agency`.
 */
class m161031_104327_create_user_agency_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_agency', [
            'user_id' => $this->integer(),
            'agency_id' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_agency');
    }
}
