<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contacts`.
 */
class m161027_113550_create_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contacts', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(25),
            'firstname_ipass' => $this->string(20),
            'lastname_ipass' => $this->string(20),
            'birth_date' => $this->dateTime(),
            'birth_country' => $this->string(20),
            'birth_city' => $this->string(20),
            'birth_region' => $this->string(20),
            'married' => $this->integer(1),
            'card_id' => $this->integer(),
            'ipassport_id' => $this->integer(),
            'language_id' => $this->integer(),
            'school_id' => $this->integer(),
            'college_id' =>  $this->integer(),
            'departure_date' => $this->dateTime(),
            'arrival_date' => $this->dateTime(),
            'email' => $this->string(20),
            'skype' => $this->string(20),
            'preferred_job' => $this->string(20),
            'preferred_state' => $this->string(20),
            'travel_with_whom' => $this->string(20),
            'created_at' => $this->dateTime(),
            'updated_at'=> $this->dateTime(),
            'status' => $this->integer(1),
            'contract_id' => $this->integer(),
            'work_search' => $this->integer(),
            'social_security_number' => $this->string(20)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contacts');
    }
}
