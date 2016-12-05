<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "addresses".
 *
 * @property integer $id
 * @property integer $type
 * @property string $address
 */
class Address extends \yii\db\ActiveRecord
{
    const TYPE_HOME = 1;
    const TYPE_WORK = 2; 
    const TYPE_REAL = 3;
    const TYPE_PASSPORT = 4;// По прописке

    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['address'], 'string', 'max' => 100],
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
            'address' => 'Address',
        ];
    }
}
