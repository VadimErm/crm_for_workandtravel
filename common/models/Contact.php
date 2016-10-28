<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $fullname
 * @property string $firstname_ipass
 * @property string $lastname_ipass
 * @property string $birth_date
 * @property string $birth_country
 * @property string $birth_city
 * @property string $birth_region
 * @property integer $married
 * @property integer $card_id
 * @property integer $ipassport_id
 * @property integer $language_id
 * @property integer $school_id
 * @property integer $college_id
 * @property string $departure_date
 * @property string $arrival_date
 * @property string $email
 * @property string $skype
 * @property string $preferred_job
 * @property string $preferred_state
 * @property string $travel_with_whom
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status_id
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birth_date', 'departure_date', 'arrival_date', 'created_at', 'updated_at'], 'safe'],
            [['married', 'card_id', 'ipassport_id', 'language_id', 'school_id', 'college_id', 'status_id'], 'integer'],
            [['fullname'], 'string', 'max' => 25],
            [['firstname_ipass', 'lastname_ipass', 'birth_country', 'birth_city', 'birth_region', 'email', 'skype', 'preferred_job', 'preferred_state', 'travel_with_whom'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'firstname_ipass' => 'Firstname Ipass',
            'lastname_ipass' => 'Lastname Ipass',
            'birth_date' => 'Birth Date',
            'birth_country' => 'Birth Country',
            'birth_city' => 'Birth City',
            'birth_region' => 'Birth Region',
            'married' => 'Married',
            'card_id' => 'Card ID',
            'ipassport_id' => 'Ipassport ID',
            'language_id' => 'Language ID',
            'school_id' => 'School ID',
            'college_id' => 'College ID',
            'departure_date' => 'Departure Date',
            'arrival_date' => 'Arrival Date',
            'email' => 'Email',
            'skype' => 'Skype',
            'preferred_job' => 'Preferred Job',
            'preferred_state' => 'Preferred State',
            'travel_with_whom' => 'Travel With Whom',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status_id' => 'Status ID',
        ];
    }
}
