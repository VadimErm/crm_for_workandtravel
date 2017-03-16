<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property integer $id
 * @property double $price
 * @property string $kcet_number
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['kcet_number', 'program_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
             'kcet_number' => 'KCET Number',
             'program_id' => 'Program ID'


        ];
    }

    public function getContact()
    {
        return $this->hasOne(Contact::className(), ['kcet_number' => 'kcet_number']);
    }

    public function getProgram()
    {
        return $this->hasOne(Program::className(), ['id' => 'program_id']);
    }

    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['kcet_number' => 'kcet_number']);
    }


}
