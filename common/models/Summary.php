<?php

namespace common\models;

use Yii;
use yii\base\Model;

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
class Summary extends Model
{
    
    //contact attributes
    public $fullname;
    public $kcet_number;
    public $kcet_date;
    public $another_fullname;
    public $first_name;
    public $last_name;
    public $birthday;
    public $country;
    public $city;
    public $region;
    public $marital_status;
    public $passport_address;
    public $real_address;
    public $home_phone;
    public $mobile_phone;
    public $another_phone;

    // Удостоверение паспорт
    public $passport_number;
    public $issued_by;
    public $issued_date;

    // Загран паспорт
    public $inter_passport_number; // Номер загран паспорта
    public $inter_issued_by;
    public $inter_issued_country;
    public $inter_issued_region;
    public $inter_issued_city;
    public $inter_exp; // Период действия

    // Отец
    public $father_fullname;
    public $father_home_address;
    public $father_home_phone;
    public $father_work_phone;
    public $father_birthday;

    // Мать
    public $mother_fullname;
    public $mother_home_address;
    public $mother_home_phone;
    public $mother_work_phone;
    public $mother_birthday;

    // Братья и сестры
    public $bro_and_sis_fullname = [];

    // Контактные лица
    public $contact_fullname;
    public $contact_address;
    public $contact_city_phone;
    public $contact_mobile_phone;

    public $departure_arrival_date;
    public $email;
    public $skype;

    // ВУЗ university
    public $un_name;
    public $un_address;
    public $un_tel;
    public $un_fax;
    public $un_course;
    public $un_faculty;
    public $un_group;
    public $un_isdean;
    public $un_dean_fullname;

    // Средняя школа
    public $school_number;
    public $school_address;
    public $school_from;
    public $school_to;

    // Коледж
    public $college_number;
    public $college_address;
    public $college_from;
    public $college_to;

    public $search_work;

    //cards attributes
    //ipassports attributes
    //jobs attributes
    //abroad_travels attributes
    //colleges attributes
    //universities attributes
    //siblings attributes
    //phones attributes
    //addresses attributes


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
            'contract_id' => 'Contract ID',
            'work_search' => 'Work Search',
            'social_security_number' => 'Social Security Number',
        ];
    }

    public function load($data, $formName = null)
    {
        $scope = $formName === null ? $this->formName() : $formName;
        if ($scope === '' && !empty($data)) {
            $this->setAttributes($data, false);

            return true;
        } elseif (isset($data[$scope])) {
            $this->setAttributes($data[$scope], false);

            return true;
        } else {
            return false;
        }
    }
}
