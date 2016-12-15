<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

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
    public $departure_date;
    public $arrival_date;
    public $email;
    public $skype;
    public $social_security_number;
    public $preferred_job;
    public $preferred_state;
    public $work_search;
    public $travel_with_whom;

    //Адреса
    public $addresses = [];
    //Телефоны
    public $phones = [];
    //Родители
    public $parents = [];
    //Удостоверение
    public $card = [];
    // Загран паспорт
    public $ipassport =[];
    // Братья и сестры
    public $siblines = [];
    // Учебные заведения
    public $university = [];
    public $school = [];
    public $college = [];
    // Контактные лица
    public $persons = [];
    //Опыт работы
    public $jobs = [];
    //Поездки заграницу
    public $abroad_travels = [];

    public function rules()
    {
        return
        [
        
            [['fullname', 'kcet_number', 'kcet_date', 'firstname_ipass','lastname_ipass',
              'birth_date', 'birth_country', 'birth_region', 'birth_city','married',
              'email', 'skype', 'preferred_job', 'preferred_state'], 'required'],

             ['kcet_number', 'match', 'pattern' => '/^[A-Z0-9]{1,}$/'],

             [['kcet_date', 'birth_date', 'departure_date', 'arrival_date'],'match', 'pattern' => '/^([0-2][0-9]|[3][01])[\/](0[1-9]|1[012])[\/]\d{4}$/'],

             [['fullname', 'another_fullname', 'birth_country', 'birth_region',
              'birth_city', 'firstname_ipass', 'lastname_ipass', 'travel_with_whom'], 'match', 'pattern' =>'/^[a-zA-Z\-\s]{1,60}$/'],

             [[ 'preferred_job', 'preferred_state'], 'match', 'pattern' => '/^[^\.\,][A-Za-z\s\.\,]+$/'],

             ['email', 'email'],

             ['skype', 'match', 'pattern' => '/^[a-z][a-z0-9\.,\-_]{5,31}$/i', 'message' => 'Только маленькие латинские буквы, цыфры, точка, запятая, дефис, нижний прочерк'],

             ['social_security_number', 'match', 'pattern' => '/^[\d]{3}-[\d]{2}-[\d]{4}$/'],

             [['work_search'], 'safe']

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

        $this->saveContact((array)$this);

        return true;
    }

    protected function saveContact($attributes)
    {
        $user_id = Yii::$app->user->id;
        $user = User::findOne($user_id);

        $contact = new Contact();

        $contact->load(['Contact' => $attributes]);
        $contact->setBirthDate($attributes['birth_date']);
        $contact->setKcetDate($attributes['kcet_date']);
        $contact->setDepartureDate($attributes['departure_date']);
        $contact->setArrivalDate($attributes['arrival_date']);
        $contact->work_search = ($attributes['work_search'] !== null) ? 0 : 1;

        $contact->save();
        $contact->link('users', $user);

        $this->saveAbroadTravels($contact,$attributes['abroad_travels']);
        $this->saveJobs($contact, $attributes['jobs']);
        $this->saveCollege($contact,$attributes['college']);
        $this->saveSchool($contact,$attributes['school']);
        $this->saveUniversity($contact, $attributes['university']);
        $this->savePersons($contact, $attributes['persons']);
        $this->saveSiblings($contact, $attributes['siblines']);
        $this->saveCard($contact, $attributes['card']);
        $this->saveIpassport($contact, $attributes['ipassport']);
        $this->savePhones($contact, $attributes['phones']);
        $this->saveParents($contact, $attributes['parents']);
        $this->saveAddress($contact, $attributes['addresses']['passport_address'], Address::TYPE_PASSPORT);
        $this->saveAddress($contact, $attributes['addresses']['real_address'], Address::TYPE_REAL);

    }

    protected function saveAddress(ActiveRecord $activeRecord, $address, $type)
    {
         if(!empty($address)) {

            $model = new Address();
            $model->load(['Address' => ['address' => $address, 'type' => $type]]);
            $model->save();
            $activeRecord->link('addresses', $model);

            return true;

         } else {

            return false;

         }

    }

    protected function savePhone(ActiveRecord $activeRecord, $phoneNumber, $type)
    {
        if(!empty($phoneNumber)) {

            $model = new Phone();
            $model->load(["Phone" => ['number' => $phoneNumber, 'type' => $type]]);
            $model->save();
            $activeRecord->link('phones', $model);

            return true;

        } else {

            return false;
        }

    }

    protected function saveCard(Contact $contact, $card)
    {
        if(!empty($card)){

            $model = new Card();
            $model->load(['Card' =>['name' => $card['name'], 'issued_by' => $card['issued_by']]]);
            $model->setIssuedDate($card['issued_date']);
            $model->save();
            $contact->link('card', $model);

            return true;

        } else {

            return false;
        }

    }

    protected function saveIpassport(Contact $contact, $ipassport)
    {
        if(!empty($ipassport)){

            $model = new Ipassport();
            $model->load(['Ipassport' => $ipassport]);
            $model->setExpiredDate($ipassport['expired_date']);
            $model->save();
            $contact->link('ipassport', $model);

            return true;

        } else {

            return false;
        }

    }

    protected function saveSiblings(Contact $contact, $siblings)
    {
        if(!empty($siblings)) {

            foreach($siblings as $sibling) {

                $model = new Sibling();
                $model->load(['Sibling' => $sibling]);
                $model->save();
                $contact->link('siblings', $model);
            }

            return true;

        } else {

            return false;
        }

    }

    protected function savePhones(ActiveRecord $activeRecord, $phones)
    {
        foreach($phones as $key => $phone) {

            switch($key){
                case 'home':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_HOME);
                    break;
                case 'work':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_WORK);
                    break;
                case 'mobile':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_MOBILE);
                    break;
                case 'city':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_CITY);
                    break;
                case 'other':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_OTHER);
                    break;
                case 'fax':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_FAX);
                    break;

            }

        }

        return true;
    }

    protected function saveParents(Contact $contact, $parents)
    {

        foreach ($parents as $key => $parent) {

            $clientParent = new ClientParent();
            $clientParent->load(['ClientParent' => ['fullname' => $parent['fullname']]]);
            $clientParent->setBirthDate($parent['birth']);

            if ($key == 'father') {

                $clientParent->type = ClientParent::TYPE_FATHER;


            } elseif ($key == 'mother') {

                $clientParent->type = ClientParent::TYPE_MOTHER;


            }
            $clientParent->save();
            $contact->link('parents', $clientParent);

            $this->saveAddress($clientParent, $parent['address']['home'], Address::TYPE_HOME );
            $this->savePhones($clientParent, $parent['phones']);

        }

        return true;


    }

    protected function savePersons(Contact $contact, $persons)
    {
        foreach($persons as $person) {

            $model = new Person();
            $model->load(['Person' => $person]);
            $model->save();
            $contact->link('persons', $model);

            $this->saveAddress($model, $person['address']['home'], Address::TYPE_HOME);
            $this->savePhones($model, $person['phones']);

        }

        return true;

    }

    protected function saveUniversity(Contact $contact, $university)
    {
        $model = new University();
        $model->load(['University' => ['name' => $university['name'], 'department' => $university['department'],
            'group' => $university['group'], 'course' => $university['course']]]);

        if(isset($university['depdean_fullname'])) {

            $model->depdean_fullname = $university['dean_fullname'];

        } else {

            $model->dean_fullname = $university['dean_fullname'];

        }

        $model->save();
        $contact->link('university', $model);

        $this->saveAddress($model, $university['address']['official'], Address::TYPE_OFFICIAL);
        $this->savePhones($model, $university['phones']);

        return true;

    }

    protected function saveSchool(Contact $contact, $school)
    {

        $model = new School();
        $model->load(['School' => $school]);
        $model->save();
        $contact->link('school', $model);

        $this->saveAddress($model, $school['address']['official'], Address::TYPE_OFFICIAL);

        return true;
    }

    protected function saveCollege(Contact $contact, $college)
    {
        if(!empty($college)) {

            $model = new College();
            $model->load(['College' => $college]);
            $model->save();
            $contact->link('college', $model);

            $this->saveAddress($model, $college['address']['official'], Address::TYPE_OFFICIAL);

            return true;

        } else {

            return false;

        }

    }

    protected function saveJobs(Contact $contact, $jobs)
    {
        if(!empty($jobs)) {

            foreach($jobs as $job) {

                $model = new Job();
                $model->load(['Job' => $job]);
                $model->setStartWorking($job['start_working']);
                $model->setFinishWorking($job['finish_working']);
                $model->save();
                $contact->link('jobs', $model);
            }

            return true;

        } else {

            return false;
        }

    }

    protected function saveAbroadTravels(Contact $contact, $abroadTravels)
    {
        if(!empty($abroadTravels)) {

            foreach($abroadTravels as $abroadTravel) {

                $model = new AbroadTravel();
                $model->load(['AbroadTravel' => $abroadTravel]);
                $model->save();
                $contact->link('abroadTravels', $model);
            }

            return true;

        } else {

            return false;
        }

    }


}
