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
            [['course', 'dean_type'], 'integer'],
            [['name'], 'string', 'max' => 40],
            [['department', 'dean_fullname'], 'string', 'max' => 30],
            [['group'], 'string', 'max' => 10],
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
            'dean_type' => 'Dean Type',
        ];
    }
}
