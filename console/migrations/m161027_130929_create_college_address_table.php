<?php

use yii\db\Migration;

/**
 * Handles the creation for table `college_adress`.
 */
class m161027_130929_create_college_address_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('college_address', [
            'address_id' => $this->integer(),
            'college_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('college_adress');
    }
}
