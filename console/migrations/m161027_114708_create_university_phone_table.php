<?php

use yii\db\Migration;

/**
 * Handles the creation for table `university_phone`.
 */
class m161027_114708_create_university_phone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('university_phone', [
            'phone_id' => $this->integer(),
            'university_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('university_phone');
    }
}
