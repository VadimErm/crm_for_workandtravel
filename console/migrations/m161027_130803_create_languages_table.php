<?php

use yii\db\Migration;

/**
 * Handles the creation for table `language`.
 */
class m161027_130803_create_languages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('languages', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'code' => $this->string(20)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('language');
    }
}
