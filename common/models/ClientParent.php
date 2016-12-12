<?php

namespace common\models;

use Yii;
use common\models\Address;

/**
 * This is the model class for table "client_parents".
 *
 * @property integer $id
 * @property integer $type
 * @property string $birth
 *
 * @property string $fullname
 */
class ClientParent extends \yii\db\ActiveRecord
{
    
    const TYPE_FATHER = 1;
    const TYPE_MOTHER = 2;
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client_parents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'integer'],
            [['birth'], 'safe'],
            [['fullname'], 'string', 'max' => 20],
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
            'birth' => 'Birth',
            'fullname' => 'Fullname',
        ];
    }

    public function setBirthDate($value)
    {
        $date = \DateTime::createFromFormat('d/m/Y', $value);
        $this->birth = $date->format('Y-m-d');
    }

    public function getBirthDate()
    {
        $date = \DateTime::createFromFormat('Y-m-d', $this->birth);
        return date_format($date, 'd/m/Y');
    }

    public function getAddress()
    {
        return $this->hasOne(Address::className(), ['id' => 'address_id'])
            ->viaTable('parent_address', ['parent_id' => 'id']);
    }
}
