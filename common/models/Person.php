<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "persons".
 *
 * @property integer $id
 * @property string $fullname
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'fullname' => 'Fullname',
        ];
    }

    public function getAddresses()
    {
        return $this->hasOne(Address::className(), ['id' => 'address_id'])
            ->viaTable('person_address', ['person_id' => 'id']);
    }

    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['id' => 'phone_id'])
            ->viaTable('person_phone', ['person_id' => 'id']);
    }
}
