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
            [['issue_date'], 'safe'],
            [['issued_by'], 'string', 'max' => 100],
            [['name'], 'string', 'max' => 30],
            [['issued_city', 'issued_region'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'issue_date' => 'Issue Date',
            'issued_by' => 'Issued By',
            'issued_city' => 'Issued City',
            'issued_region' => 'Issued Region',
        ];
    }
}
