<?php

use yii\db\Migration;

/**
 * Handles the creation for table `status`.
 */
class m161028_091735_create_statuses_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('statuses', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('status');
    }
}
