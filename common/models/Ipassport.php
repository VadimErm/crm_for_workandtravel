<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ipassports".
 *
 * @property integer $id
 * @property string $issue_date
 * @property string $issued_by
 * @property string $issued_city
 * @property string $issued_region
 */
class Ipassport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ipassports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['expired_date'], 'safe'],
            [['issued_by'], 'string', 'max' => 100],
            [['number'], 'string', 'max' => 30],
            [['issued_city', 'issued_region', 'issued_country'], 'string', 'max' => 20],
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
            'expired_date' => 'Expired Date',
            'issued_by' => 'Issued By',
            'issued_city' => 'Issued City',
            'issued_region' => 'Issued Region',
            'issued_country' => 'Issued Country'
        ];
    }

    public function setExpiredDate($value)
    {
        $date = \DateTime::createFromFormat('d/m/Y', $value);
        $this->expired_date = $date->format('Y-m-d');
    }

    public function getExpiredDate()
    {
        $date = \DateTime::createFromFormat('Y-m-d', $this->expired_date);
        return date_format($date, 'd/m/Y');
    }
}
