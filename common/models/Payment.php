<?php

namespace common\models;


use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "payments".
 *
 * @property integer $id
 * @property integer $contract_id
 * @property double $payment
 * @property integer $is_cash
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $payment_check
 * @property mixed kcet_number
 */
class Payment extends \yii\db\ActiveRecord
{
    const STATUS_PAID = 1;
    const STATUS_DELETED = 2;
    const STATUS_ERROR = 3;
    const STATUS_REJECT = 4;

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
        return 'payments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', ], 'integer'],
            [['payment'], 'number'],
            [['is_cash'],'boolean'],
            [['status', 'kcet_number', 'payment_check'], 'safe']
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_id' => 'Contract ID',
            'payment' => 'Payment',
            'is_cash' => 'Is Cash',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'payment_check' => 'Payment Check',
            'status' => 'Status'
        ];
    }

    public function load($data, $formName = null)
    {
        $scope = $formName === null ? $this->formName() : $formName;
        if ($scope === '' && !empty($data)) {
            $this->setAttributes($data);

            return true;
        } elseif (isset($data[$scope])) {
            $this->setAttributes($data[$scope]);
            if($this->is_cash) {
                $this->is_cash = true;
            } else {
                $this->is_cash = false;
            }

            return true;
        } else {
            return false;
        }
    }




    public function getContract()
    {
        return $this->hasOne(Contract::className(), ['kcet_number' => 'kcet_number']);
    }

    public function getCheck()
    {
        return $this->hasMany(File::className(), ['id' => 'payment_check']);
    }
}
