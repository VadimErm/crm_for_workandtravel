<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $fullname
 * @property string $firstname_ipass
 * @property string $lastname_ipass
 * @property string $another_fullname
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
 * @property integer $university_id
 * @property string $departure_date
 * @property string $arrival_date
 * @property string $email
 * @property string $skype
 * @property string $preferred_job
 * @property string $preferred_state
 * @property string $travel_with_whom
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status
 * @property integer $contract_id
 * @property integer $work_search
 * @property string $social_security_number
 */
class Contact extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

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
            [['birth_date', 'departure_date', 'arrival_date', 'created_at', 'updated_at', 'work_search'], 'safe'],
            [['married', 'card_id', 'ipassport_id', 'language_id', 'school_id', 'college_id', 'university_id', 'status', 'kcet_number'], 'safe'],
            [['fullname', 'another_fullname'], 'safe'],
            [['firstname_ipass', 'lastname_ipass', 'birth_country', 'birth_city', 'birth_region', 'email', 'skype', 'preferred_job', 'preferred_state', 'travel_with_whom', 'social_security_number' ], 'safe'],
            //[['approved'], 'boolean']
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
            'kcet_number' => 'KCET Number',
            'kcet_date' => 'KCET Date',
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
            'university_id' => 'University ID',
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
            'status' => 'Status',
            'work_search' => 'Work Search',
            'social_security_number' => 'Social Security Number',
            //'approved' => 'Approved'
        ];
    }

    public function setBirthDate($value)
    {
        $date = \DateTime::createFromFormat('d/m/Y', $value);
        $this->birth_date = $date->format('Y-m-d');
    }

    public function getBirthDate()
    {
        $date = \DateTime::createFromFormat('Y-m-d', $this->birth_date);
        return date_format($date, 'd/m/Y');
    }

    public function setKcetDate($value)
    {
        $date = \DateTime::createFromFormat('d/m/Y', $value);
        $this->kcet_date = $date->format('Y-m-d');
    }

    public function getKcetDate()
    {
        $date = \DateTime::createFromFormat('Y-m-d', $this->kcet_date);
        return date_format($date, 'd/m/Y');
    }

    public function setDepartureDate($value)
    {
        $date = \DateTime::createFromFormat('d/m/Y', $value);
        $this->departure_date = $date->format('Y-m-d');
    }

    public function getDepartureDate()
    {
        $date = \DateTime::createFromFormat('Y-m-d', $this->departure_date);
        return date_format($date, 'd/m/Y');
    }

    public function setArrivalDate($value)
    {
        $date = \DateTime::createFromFormat('d/m/Y', $value);
        $this->arrival_date = $date->format('Y-m-d');
    }

    public function getArrivalDate()
    {
        $date = \DateTime::createFromFormat('Y-m-d', $this->arrival_date);
        return date_format($date, 'd/m/Y');
    }

    //Relations

    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['id' => 'address_id'])
            ->viaTable('contact_address', ['contact_id' => 'id']);
    }

    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['id' => 'phone_id'])
            ->viaTable('contact_phone', ['contact_id' => 'id']);
    }

    public function getPersons()
    {
        return $this->hasMany(Person::className(), ['id' => 'person_id'])
            ->viaTable('contact_person', ['contact_id' => 'id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id'])
            ->viaTable('contact_user', ['contact_id' => 'id']);
    }

    public function getAbroadTravels()
    {
        return $this->hasMany(AbroadTravel::className(), ['id' => 'abroad_travel_id'])
            ->viaTable('contact_abroad_travel', ['contact_id' => 'id']);
    }

    public function getSiblings()
    {
        return $this->hasMany(Sibling::className(), ['id' => 'sibling_id'])
            ->viaTable('contact_sibling', ['contact_id' => 'id']);
    }

    public function getJobs()
    {
        return $this->hasMany(Job::className(), ['id' => 'job_id'])
            ->viaTable('contact_job', ['contact_id' => 'id']);
    }

    public function getParents()
    {
        return $this->hasMany(ClientParent::className(), ['id' => 'parent_id'])
            ->viaTable('contact_parent', ['contact_id' => 'id']);
    }


    public function getIpassport()
    {
        return $this->hasOne(Ipassport::className(), ['id' => 'ipassport_id']);
    }
    
    public function getSchool()
    {
        return $this->hasOne(School::className(), ['id' => 'school_id']);
    }

    public function getUniversity()
    {
        return $this->hasOne(University::className(), ['id' => 'university_id']);
    }

    public function getCollege()
    {
        return $this->hasOne(College::className(), ['id' => 'college_id']);
    }

    public function getCard()
    {
        return $this->hasOne(Card::className(), ['id' => 'card_id']);
    }

}
