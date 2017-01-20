<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "programs".
 *
 * @property integer $id
 * @property string $title
 */
class Program extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 60],
            [['year'], 'integer', 'max' =>9999],
            [['price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'year' => 'Year',
            'price' => 'Price'
        ];
    }
    public function getAgreements()
    {

        return $this->hasMany(Agreement::className(), ['program_id' => 'id']);

    }

    public function getContracts()
    {
        return $this->hasMany(Contract::className(), ['program_id' => 'id']);
    }

}
