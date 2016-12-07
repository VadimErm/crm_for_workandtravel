<?php

use yii\db\Migration;

/**
 * Handles the creation for table `agreements`.
 */
class m161206_104105_create_agreements_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('agreements', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->unique(),
            'agreement' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull()
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('agreements');
    }
}
