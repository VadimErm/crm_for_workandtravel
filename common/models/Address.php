<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "addresses".
 *
 * @property integer $id
 * @property integer $type
 * @property string $address
 */
class Address extends \yii\db\ActiveRecord
{
    const TYPE_HOME = 1;//Родителей, прочих лиц
    const TYPE_OFFICIAL = 2; //Учебных заведений
    const TYPE_REAL = 3; //Реальный
    const TYPE_PASSPORT = 4;// По прописке

    private static $model;





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

   /* public static function create($attributes, $type)
    {
        if(!empty($attributes)) {

            static::$model = new self;

            static::$model->load(['Address' => ['address' => $attributes, 'type' => $type]]);

            static::$model->save();

            return true;

        } else {

            return false;
        }

    }

    public static function linkWithEntity (ActiveRecord $entity)
    {
        $entity->link('addresses', static::$model);


    }*/


}
