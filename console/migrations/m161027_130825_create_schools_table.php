<?php

use yii\db\Migration;

/**
 * Handles the creation for table `schools`.
 */
class m161027_130825_create_schools_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('schools', [
            'id' => $this->primaryKey(),
            'type' => $this->integer(3),
            'educ_start' => $this->dateTime(),
            'educ_finish' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('schools');
    }
}
