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

    
    public $parents;

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
    public $siblines = array();
    public $bro_and_sis_fullname;

    // Контактные лица
    public $persons;
    public $person;
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
    public $jobs;
    public $company_name;
    public $position;
    public $exp_from;
    public $exp_to;


    public $preferred_job; // Предпочитаемая вакансия
    public $preferred_state;

    public $abroad_countries;

    public $abroad_country;
    public $abroad_visa_type;
    public $social_security_num;
    public $travel_with_whom;

    public $phones;
    public $card;
    public $ipassport;
    public $university;
    public $school;
    public $college;
    public $social_security_number; 

    //public $sibling;

    public function rules()
    {
        return [
        
           [['fullname'], 'required'],
           //['siblines', 'string', 'max' => 5],
           //[['siblines'], 'each', 'rule' => ['fullname', 'each', 'rule' => ['string', 'max' => 5]]],
          // ['siblines', 'each', 'rule' =>  ['string', 'max' => 5]],
           //[['siblines'], 'safe'],
           [['fullname'], 'string', 'max' => 5],

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
        
        foreach ($this->bro_and_sis_fullname as $key => $sibling) {
            $siblingModel = new Sibling();
            $siblingModel->load(['Sibling' => (array)$sibling]);
            $siblingModel->save();
        }
        foreach ($this->parents as $key => $parent) {
            
            $parentModel = new Parent();
            $parentModel->load(['Parent' => (array)$parent]);

            foreach ($parent['phones'] as $phoneKey => $phone) {
                $phoneModel = new Phone();
                if ($phoneKey == 'home') {
                    
                    //echo "<pre>";
                    //var_dump($parent['phones']);
                    //var_dump($parent['address']);
                    //echo "</pre>";
                    //exit;

                    $phoneModel->load(['Phone' => array('number' => $parent['phones']['home'], 'type' => Phone::TYPE_HOME)]);
                    $phoneModel->save();
                }
                if ($phoneKey == 'work') {
                    $phoneModel->load(['Phone' => array('number' => $parent['phones']['work'], 'type' => Phone::TYPE_WORK)]);  
                    $phoneModel->save();
                }
            }
            
            foreach ($parent['address'] as $addressKey => $address) {
                $addressModel = new Address();
                if ($addressKey == 'home') {
                    $addressModel->load(['Address' => array('address' => $parent['address']['home'], 'type' => Address::TYPE_HOME)]); 
                    $addressModel->save();

                }             
            }

            //$parentModel->save();

        }

        
        //echo "<pre>";
        //var_dump($this->bro_and_sis_fullname);
        //echo "</pre>";

        $realAddress->type = Address::TYPE_REAL;
        $realAddress->address = $this->real_address;
        $passportAddress->type = Address::TYPE_PASSPORT;
        $passportAddress->address = $this->passport_address;


        // TODO addresses save

//        var_dump($passportAddress);
//
//        var_dump($contact);
        //var_dump($this);
        return true;
    }
}
