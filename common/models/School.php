<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $id
 * @property integer $type
 * @property string $educ_start
 * @property string $educ_finish
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number'], 'integer'],
            [['educ_start', 'educ_finish'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'educ_start' => 'Educ Start',
            'educ_finish' => 'Educ Finish',
        ];
    }

    public function getAddresses()
    {
        return $this->hasOne(Address::className(), ['id' => 'address_id'])
            ->viaTable('school_address', ['school_id' => 'id']);
    }
}
