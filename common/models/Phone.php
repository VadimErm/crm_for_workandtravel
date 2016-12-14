<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phones".
 *
 * @property integer $id
 * @property integer $type
 * @property string $number
 */
class Phone extends \yii\db\ActiveRecord
{
    
    const TYPE_HOME = 1;
    const TYPE_WORK = 2;
    const TYPE_MOBILE =3;
    const TYPE_CITY = 4;
    const TYPE_OTHER = 5;
    const TYPE_FAX = 6;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['number'], 'string', 'max' => 14],
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
            'number' => 'Number',
        ];
    }

    public function getParents()
    {
        return $this->hasMany(Parent::className(), ['id' => 'parent_id'])
            ->viaTable('parent_job', ['phone_id' => 'id']);
    }

    public function getPersons()
    {
        return $this->hasMany(Person::className(), ['id' => 'person_id'])
            ->viaTable('person_job', ['phone_id' => 'id']);
    }

    public function getUniversities()
    {
        return $this->hasMany(University::className(), ['id' => 'university_id'])
            ->viaTable('university_job', ['phone_id' => 'id']);
    }
}
