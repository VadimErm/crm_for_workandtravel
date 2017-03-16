<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_task".
 *
 * @property integer $user_id
 * @property integer $task_id
 * @property integer $readed
 */
class UserTask extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'task_id', 'readed'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'task_id' => 'Task ID',
            'readed' => 'Readed',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);

    }
}