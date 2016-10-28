<?php

use yii\db\Migration;

/**
 * Handles the creation for table `files`.
 */
class m161028_092006_create_files_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('files', [
            'id' => $this->primaryKey(),
            'path' => $this->string(100),
            'user_id' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('files');
    }
}
