<?php

use yii\db\Migration;

/**
 * Handles the creation for table `ipassports`.
 */
class m161027_125327_create_ipassports_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('ipassports', [
            'id' => $this->primaryKey(),
            'expired_date' => $this->date(),
            'issued_by' => $this->string(100),
            'issued_city' => $this->string(20),
            'issued_region' => $this->string(20),           
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ipassports');
    }
}
