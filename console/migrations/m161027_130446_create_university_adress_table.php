<?php

use yii\db\Migration;

/**
 * Handles the creation for table `university_adress`.
 */
class m161027_130446_create_university_adress_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('university_adress', [
            'adress_id' => $this->integer(),
            'university_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('university_adress');
    }
}
