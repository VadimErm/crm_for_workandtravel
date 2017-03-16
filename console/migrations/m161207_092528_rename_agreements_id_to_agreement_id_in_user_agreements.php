<?php

use yii\db\Migration;

class m161207_092528_rename_agreements_id_to_agreement_id_in_user_agreements extends Migration
{
    public function up()
    {
       $this->renameColumn('user_agreements', 'agreements_id', 'agreement_id');

    }

    public function down()
    {
        $this->renameColumn('user_agreements', 'agreement_id', 'agreements_id');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
