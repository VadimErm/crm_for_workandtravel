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
            [['issue_date'], 'safe'],
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
            'issue_date' => 'Issue Date',
            'name' => 'Name',
            'issued_by' => 'Issued By',
        ];
    }
}
