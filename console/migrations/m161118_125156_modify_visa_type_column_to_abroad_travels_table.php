<?php

use yii\db\Migration;

/**
 * Handles adding visa_type to table `abroad_travels`.
 */
class m161118_125156_modify_visa_type_column_to_abroad_travels_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->alterColumn('abroad_travels', 'visa_type', $this->string(40));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->alterColumn('abroad_travels', 'visa_type' , $this->integer());
    }
}
