<?php

use yii\db\Migration;

/**
 * Handles dropping birth_country from table `client_parents`.
 */
class m161212_090858_drop_birth_country_column_from_client_parents_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('client_parents', 'birth_country');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('client_parents', 'birth_country', $this->string(20));
    }
}
