<?php


namespace common\models;

use Yii;

class SessionUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'session_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ip'], 'required'],
            [['user_id', 'expire'], 'integer'],
            [['data'], 'string'],
            [['id'], 'string', 'max' => 80],
            [['ip'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'ip' => 'Ip',
            'expire' => 'Expire',
            'data' => 'Data',
        ];
    }

} 