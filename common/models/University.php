<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "universities".
 *
 * @property integer $id
 * @property string $name
 * @property string $department
 * @property string $group
 * @property integer $course
 * @property string $dean_fullname
 * @property integer $dean_type
 */
class University extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'universities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course'], 'integer'],
            [['name'], 'string', 'max' => 40],
            [['department', 'dean_fullname'], 'string', 'max' => 35],
            [['group'], 'string', 'max' => 10],
            [['depdean'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'department' => 'Department',
            'group' => 'Group',
            'course' => 'Course',
            'dean_fullname' => 'Dean Fullname',

        ];
    }

    public function getAddresses()
    {
        return $this->hasOne(Address::className(), ['id' => 'address_id'])
            ->viaTable('university_address', ['university_id' => 'id']);
    }

    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['id' => 'phone_id'])
            ->viaTable('university_phone', ['university_id' => 'id']);
    }
}
