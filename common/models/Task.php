<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "tasks".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 */
class Task extends \yii\db\ActiveRecord
{
    //Тыпи тасков: для конкретного студента или для всех
    CONST PARTICULAR = 1;
    CONST ALL = 2;



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
        return 'tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'description'], 'string'],
            [['created_at', 'updated_at', 'program_id'], 'integer'],
            [['title'], 'string', 'max' => 60],
            [['status', 'destination'], 'safe']
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
            'content' => 'Text',
            'description' => 'Description',
            'destination' => 'Destination',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getUpdatedDate()
    {
        return date('d-m-Y', $this->updated_at);
    }




    public function getProgram()
    {
        return $this->hasOne(Program::className(), ['id' =>'program_id']);
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])
            ->viaTable('user_task',['task_id' => 'id']);
    }
}
