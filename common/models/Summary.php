<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use common\helpers\SummaryArrayHelper;

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
    public $siblings = [];
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
        
           /*[['fullname', 'kcet_number', 'kcet_date', 'firstname_ipass','lastname_ipass',
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

             [['work_search'], 'safe']*/

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

    public function save($runValidation = true, $user_id = null, $attributes = null)
    {
        if ($runValidation && !$this->validate($attributes)) {
            Yii::info('Model not inserted due to validation error.', __METHOD__);
            return false;
        }
        //$this->load(['Summary' => (array)$this]);
        //var_dump($this);
        //exit;
        if ($user_id !== null){

            $this->saveContact((array)$this, $user_id);

        } else {
            $this->saveContact((array)$this);
        }

        return true;
    }

    public static function getSummary($user_id)
    {

        $summary = User::findOne($user_id)->getContact()
            ->with('addresses', 'phones',
                    'persons', 'persons.addresses', 'persons.phones', 'abroadTravels', 'siblings',
                    'jobs', 'parents', 'parents.addresses','parents.phones', 'ipassport',
                    'school','school.addresses', 'university', 'university.addresses','university.phones',
                    'college','college.addresses', 'card')
            ->asArray()->one();

        $contact = User::findOne($user_id)->contact;
        //var_dump($summary);exit;

        $model = new Summary();
        $model->load(['Summary' => $summary]);
        $model->kcet_date = $contact->getKcetDate();
        $model->birth_date = $contact->getBirthDate();
        $model->departure_date= $contact->getDepartureDate();
        $model->arrival_date = $contact->getArrivalDate();
        $model->addresses = SummaryArrayHelper::map($summary['addresses'], ['passport_address', 'real_address'], 'address');
        $model->phones = SummaryArrayHelper::map($summary['phones'], ['home','mobile', 'other'], 'number');
        $model->parents = SummaryArrayHelper::map($summary['parents'], ['father', 'mother'], ['fullname']);
        $model->parents['father']['birth'] = $contact->parents[0]->getBirthDate();
        $model->parents['father']['addresses']['home']= $summary['parents'][0]['addresses']['address'];
        $model->parents['father']['phones'] = SummaryArrayHelper::map($summary['parents'][0]['phones'], ['home','work','mobile'], 'number');
        $model->parents['mother']['addresses']['home']= $summary['parents'][1]['addresses']['address'];
        $model->parents['mother']['phones'] = SummaryArrayHelper::map($summary['parents'][1]['phones'], ['home','work','mobile'], 'number');
        $model->parents['mother']['birth'] = $contact->parents[1]->getBirthDate();
        $model->university['addresses'] = [];
        $model->university['addresses']['official'] = $summary['university']['addresses']['address'];
        $model->university['phones'] = SummaryArrayHelper::map($summary['university']['phones'], ['work','fax'], 'number');
        $model->school['addresses'] = [];
        $model->school['addresses']['official'] = $summary['school']['addresses']['address'];
        $model->college['addresses'] = [];
        $model->college['addresses']['official'] = $summary['college']['addresses']['address'];
        $model->persons = SummaryArrayHelper::map($summary['persons'], ['first', 'second'], ['fullname']);
        $model->persons['first']['addresses']['home']= $summary['persons'][0]['addresses']['address'];
        $model->persons['first']['phones'] = SummaryArrayHelper::map($summary['persons'][0]['phones'], ['city','mobile'], 'number');
        $model->persons['second']['addresses']['home']= $summary['persons'][1]['addresses']['address'];
        $model->persons['second']['phones'] = SummaryArrayHelper::map($summary['persons'][1]['phones'], ['city','mobile'], 'number');
        $model->card['issued_date'] = $contact->card->getIssuedDate();
        $model->ipassport['expired_date'] = $contact->ipassport->getExpiredDate();
        $model->abroad_travels = $summary['abroadTravels'];

        return $model;

    }

    protected function saveContact($attributes, $user_id = null)
    {
        if ($user_id !== null){
            $user = User::findOne($user_id);
            $contact = $user->contact;
            $update = true;
        } else {
            $user = User::findOne(Yii::$app->user->id);
            $contact = new Contact();
            $update = false;
        }

        $contact->load(['Contact' => $attributes]);
        $contact->setBirthDate($attributes['birth_date']);
        $contact->setKcetDate($attributes['kcet_date']);
        $contact->setDepartureDate($attributes['departure_date']);
        $contact->setArrivalDate($attributes['arrival_date']);
        $contact->work_search = ($attributes['work_search'] == 'on') ? 0 : 1;

        $contact->save();

        if($user_id == null){
            $contact->link('user', $user);
        }

        $this->saveAbroadTravels($contact,$attributes['abroad_travels'], $update);
        $this->saveJobs($contact, $attributes['jobs'], $update);
        $this->saveCollege($contact,$attributes['college'], $update);
        $this->saveSchool($contact,$attributes['school'], $update);
        $this->saveUniversity($contact, $attributes['university'], $update);
        $this->savePersons($contact, $attributes['persons'], $update);
        $this->saveSiblings($contact, $attributes['siblings'], $update);
        $this->saveCard($contact, $attributes['card'], $update);
        $this->saveIpassport($contact, $attributes['ipassport'], $update);
        $this->savePhones($contact, $attributes['phones'], $update);
        $this->saveParents($contact, $attributes['parents'],  $update);
        $this->saveAddress($contact, $attributes['addresses']['passport_address'], Address::TYPE_PASSPORT, $update);
        $this->saveAddress($contact, $attributes['addresses']['real_address'], Address::TYPE_REAL, $update);

    }

    protected function saveAddress(ActiveRecord $activeRecord, $address, $type, $update = false)
    {
         if(!empty($address)) {

            if($update == false){

                $model = new Address();

            } else {

                $model = $activeRecord->getAddresses()->filterWhere(['type' => $type])->one();

            }

            $model->load(['Address' => ['address' => $address, 'type' => $type]]);
            $model->save();

            if($update == false){

                $activeRecord->link('addresses', $model);

            }

            return true;

         } else {

            return false;

         }

    }

    protected function savePhone(ActiveRecord $activeRecord, $phoneNumber, $type, $update =false)
    {
        if(!empty($phoneNumber)) {

            if($update == false){

                $model = new Phone();

            } else {

                $model = $activeRecord->getPhones()->filterWhere(['type' => $type])->one();

            }

            $model->load(["Phone" => ['number' => $phoneNumber, 'type' => $type]]);
            $model->save();

            if($update == false){
                $activeRecord->link('phones', $model);
            }
            return true;

        } else {

            return false;
        }

    }

    protected function saveCard(Contact $contact, $card, $update = false)
    {
        if(!empty($card)){

            if($update == false){

                $model = new Card();

            } else {

                $model = $contact->getCard()->one();

            }

            $model->load(['Card' =>['name' => $card['name'], 'issued_by' => $card['issued_by']]]);

            $model->setIssuedDate($card['issued_date']);
            //var_dump($model);exit;
            $model->save();

            if($update == false){
                $contact->link('card', $model);
            }

            return true;

        } else {

            return false;
        }

    }

    protected function saveIpassport(Contact $contact, $ipassport, $update = false)
    {
        if(!empty($ipassport)){

            if($update == false){

                $model = new Ipassport();

            } else {

                $model = $contact->getIpassport()->one();

            }

            $model->load(['Ipassport' => $ipassport]);
            $model->setExpiredDate($ipassport['expired_date']);
            $model->save();

            if($update == false){
                $contact->link('ipassport', $model);
            }

            return true;

        } else {

            return false;
        }

    }

    protected function saveSiblings(Contact $contact, $siblings, $update = false)
    {
        if(!empty($siblings)) {

            $i = 0;
            foreach($siblings as $sibling) {

                if($update == false){

                    $model = new Sibling();

                } else {

                    $model = $contact->getSiblings()->all()[$i];
                    $i++;

                }

                $model->load(['Sibling' => $sibling]);
                $model->save();
                if($update == false){
                    $contact->link('siblings', $model);
                }

            }

            return true;

        } else {

            return false;
        }

    }

    protected function savePhones(ActiveRecord $activeRecord, $phones, $update =false)
    {
        foreach($phones as $key => $phone) {

            switch($key){
                case 'home':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_HOME, $update);
                    break;
                case 'work':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_WORK, $update);
                    break;
                case 'mobile':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_MOBILE, $update);
                    break;
                case 'city':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_CITY, $update);
                    break;
                case 'other':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_OTHER, $update);
                    break;
                case 'fax':
                    $this->savePhone($activeRecord, $phone, Phone::TYPE_FAX, $update);
                    break;

            }

        }

        return true;
    }

    protected function saveParents(Contact $contact, $parents, $update = false)
    {

        foreach ($parents as $key => $parent) {

            if ($key == 'father') {

                $type = ClientParent::TYPE_FATHER;

            } elseif ($key == 'mother') {

                $type = ClientParent::TYPE_MOTHER;

            }

            if($update == false){

                $clientParent = new ClientParent();

            } else {

                $clientParent = $contact->getParents()->filterWhere(['type' => $type])->one();;

            }

            $clientParent->load(['ClientParent' => ['fullname' => $parent['fullname']]]);
            $clientParent->setBirthDate($parent['birth']);
            $clientParent->type = $type;

            $clientParent->save();

            if($update == false){
                $contact->link('parents', $clientParent);
            }

            $this->saveAddress($clientParent, $parent['addresses']['home'], Address::TYPE_HOME , $update);
            $this->savePhones($clientParent, $parent['phones'], $update);

        }

        return true;

    }

    protected function savePersons(Contact $contact, $persons, $update= false)
    {

        $i = 0;
        foreach($persons as $person) {

            if($update == false){

                $model = new Person();

            } else {

                $model = $contact->getPersons()->all()[$i];
                $i++;

            }

            $model->load(['Person' => $person]);
            $model->save();

            if($update == false){
                $contact->link('persons', $model);
            }

            $this->saveAddress($model, $person['addresses']['home'], Address::TYPE_HOME, $update);
            $this->savePhones($model, $person['phones'], $update);

        }

        return true;

    }

    protected function saveUniversity(Contact $contact, $university, $update = false)
    {
        if($update == false){

            $model = new University();

        } else {

            $model= $contact->getUniversity()->one();

        }

        $model->load(['University' => $university]);

        if(!empty($university['depdean'])) {

            $model->depdean = true;

        } else {

            $model->depdean = false;

        }

        $model->save();

        if($update == false){
            $contact->link('university', $model);
        }

        $this->saveAddress($model, $university['addresses']['official'], Address::TYPE_OFFICIAL, $update);
        $this->savePhones($model, $university['phones'], $update);

        return true;

    }

    protected function saveSchool(Contact $contact, $school, $update = false)
    {
        if($update == false){

            $model = new School();

        } else {

            $model= $contact->getSchool()->one();

        }

        $model->load(['School' => $school]);
        $model->save();

        if($update == false){
            $contact->link('school', $model);
        }

        $this->saveAddress($model, $school['addresses']['official'], Address::TYPE_OFFICIAL, $update);

        return true;
    }

    protected function saveCollege(Contact $contact, $college, $update = false)
    {
        if(!empty($college)) {

            if($update == false){

                $model = new College();

            } else {

                $model= $contact->getCollege()->one();

            }

            $model->load(['College' => $college]);
            $model->save();

            if($update == false){
                $contact->link('college', $model);
            }


            $this->saveAddress($model, $college['addresses']['official'], Address::TYPE_OFFICIAL, $update);

            return true;

        } else {

            return false;

        }

    }

    protected function saveJobs(Contact $contact, $jobs, $update = false)
    {
        if(!empty($jobs)) {

            $i = 0;
            foreach($jobs as $job) {

                if($update == false){

                    $model = new Job();

                } else {

                    $model = $contact->getJobs()->all()[$i];
                    $i++;

                }

                $model->load(['Job' => $job]);
                $model->save();
                if($update == false){
                    $contact->link('jobs', $model);
                }

            }

            return true;

        } else {

            return false;
        }

    }

    protected function saveAbroadTravels(Contact $contact, $abroadTravels, $update = false)
    {
        if(!empty($abroadTravels)) {

            $i = 0;
            foreach($abroadTravels as $abroadTravel) {

                if($update == false){

                    $model = new AbroadTravel();

                } else {

                    $model = $contact->getAbroadTravels()->all()[$i];
                    $i++;

                }

                $model->load(['AbroadTravel' => $abroadTravel]);
                $model->save();

                if($update == false){
                    $contact->link('abroadTravels', $model);
                }

            }

            return true;

        } else {

            return false;
        }

    }


}
