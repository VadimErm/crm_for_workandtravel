<?php

use yii\db\Migration;

/**
 * Handles the creation for table `content`.
 */
class m161202_121513_create_content_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'title' => $this->string(60),
            'content' => $this->text(),
            'slug' => $this->string(60)->notNull()->unique(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),

        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('content');
    }
}
