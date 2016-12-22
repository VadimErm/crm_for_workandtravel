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
            'number' => $this->integer(4),
            'educ_start' => $this->integer(4),
            'educ_finish' => $this->integer(4),
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
