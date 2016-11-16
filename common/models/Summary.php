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
    public $firstname_ipass;
    public $lastname_ipass;
    public $birth_date;
    public $birth_country;
    public $birth_city;
    public $birth_region;
    public $married;

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
    public $bro_and_sis_fullname;

    // Контактные лица
    public $contact_fullname;
    public $contact_address;
    public $contact_city_phone;
    public $contact_mobile_phone;

    public $departure_date;
    public $arrival_date;
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

    // Опыт работы
    public $company_name;
    public $position;
    public $exp_from;
    public $exp_to;


    public $wish_position; // Предпочитаемая вакансия
    public $wish_state;

    public $abroad_country;
    public $abroad_visa_type;
    public $social_security_num;
    public $with_go;

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

    public function save($runValidation = true, $attributes = null)
    {
        if ($runValidation && !$this->validate($attributes)) {
            Yii::info('Model not inserted due to validation error.', __METHOD__);
            return false;
        }

        $contact = new Contact();

        $contact->load(['Contact' => (array)$this]);
        // TODO contact save

        $realAddress = new Address();
        $passportAddress = new Address();

        $realAddress->type = Address::TYPE_REAL;
        $realAddress->address = $this->real_address;
        $passportAddress->type = Address::TYPE_PASSPORT;
        $passportAddress->address = $this->passport_address;

        // TODO addresses save

//        var_dump($passportAddress);
//
//        var_dump($contact);
        var_dump($this);
        return true;
    }
}
