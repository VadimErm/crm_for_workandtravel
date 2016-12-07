<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "abroad_travels".
 *
 * @property integer $id
 * @property string $country
 * @property integer $visa_type
 */
class AbroadTravel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'abroad_travels';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['visa_type'], 'string', 'max' => 40],
            [['country'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'visa_type' => 'Visa Type',
        ];
    }
}
