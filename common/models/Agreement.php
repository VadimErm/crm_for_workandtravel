<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "agreements".
 *
 * @property integer $id
 * @property string $title
 * @property string $agreement
 * @property integer $created_at
 * @property integer $updated_at
 */
class Agreement extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agreements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agreement'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['title'], 'unique'],
            [['program_id'], 'integer']
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
            'agreement' => 'Agreement',
            'created_at' => 'Created',
            'updated_at' => 'Updated',
            'program_id' => 'Program'
        ];
    }

    public function getProgram()
    {

        return $this->hasOne(Program::className(), ['id' => 'program_id']);

    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' =>  'user_id'])
            ->viaTable('user_agreements', ['agreement_id' => 'id']);
    }

}
