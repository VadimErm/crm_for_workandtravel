<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cards".
 *
 * @property integer $id
 * @property string $issue_date
 * @property string $name
 * @property string $issued_by
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cards';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['issued_date'], 'safe'],
            [['name', 'issued_by'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'issued_date' => 'Issued Date',
            'name' => 'Name',
            'issued_by' => 'Issued By',
        ];
    }

    public function setIssuedDate($value)
    {
        if(!empty($value)) {
            $this->issued_date = \DateTime::createFromFormat('d/m/Y', $value)->format('Y-m-d');
        } else {
            $this->issued_date = null;
        }

    }

    public function getIssuedDate()
    {
        if(!empty($this->issued_date)){
            return date_format(\DateTime::createFromFormat('Y-m-d', $this->issued_date), 'd/m/Y');
        } else {
            return null;
        }
    }
}
