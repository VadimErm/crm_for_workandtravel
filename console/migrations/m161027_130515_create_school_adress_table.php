<?php

use yii\db\Migration;

/**
 * Handles the creation for table `school_adress`.
 */
class m161027_130515_create_school_adress_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('school_adress', [
            'adress_id' => $this->integer(),
            'school_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('school_adress');
    }
}
