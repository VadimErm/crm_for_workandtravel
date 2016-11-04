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
            [['number'], 'string', 'max' => 10],
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
