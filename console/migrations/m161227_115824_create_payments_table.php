зрз<?php

use yii\db\Migration;

/**
 * Handles the creation for table `payments`.
 */
class m161227_115824_create_payments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('payments', [
            'id' => $this->primaryKey(),
            'kcet_number' => $this->string(20),
            'payment' => $this->float(),
            'is_cash' => $this->boolean(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'payment_check' => $this->integer(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('payments');
    }
}
