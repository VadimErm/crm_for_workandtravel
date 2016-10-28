<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client_parents".
 *
 * @property integer $id
 * @property integer $type
 * @property string $birth
 * @property string $birth_country
 * @property string $fullname
 */
class ClientParent extends \yii\db\ActiveRecord
{
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
            [['birth_country', 'fullname'], 'string', 'max' => 20],
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
            'birth_country' => 'Birth Country',
            'fullname' => 'Fullname',
        ];
    }
}
