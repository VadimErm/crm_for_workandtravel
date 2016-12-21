<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "client_parents".
 *
 * @property integer $id
 * @property integer $type
 * @property string $birth
 *
 * @property string $fullname
 */
class ClientParent extends \yii\db\ActiveRecord
{
    
    const TYPE_FATHER = 1;
    const TYPE_MOTHER = 2;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_parents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['birth'], 'safe'],
            [['fullname'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'birth' => 'Birth',
            'fullname' => 'Fullname',
        ];
    }

    public function setBirthDate($value)
    {
        if(!empty($value)) {
            $this->birth = \DateTime::createFromFormat('d/m/Y', $value)->format('Y-m-d');
        } else {
            $this->birth = null;
        }

    }

    public function getBirthDate()
    {
        if(!empty($this->birth)){
            return date_format(\DateTime::createFromFormat('Y-m-d', $this->birth), 'd/m/Y');
        } else {
            return null;
        }
    }

    public function getAddresses()
    {
        return $this->hasOne(Address::className(), ['id' => 'address_id'])
            ->viaTable('parent_address', ['parent_id' => 'id']);
    }

    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['id' => 'phone_id'])
            ->viaTable('parent_phone', ['parent_id' => 'id']);
    }
}
