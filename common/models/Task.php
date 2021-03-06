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

    //Статус задания
    CONST NEW_TASK = 1;
    CONST READED = 2;
    CONST DONE = 3;


    public $mail;
    public $user;

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

            [['created_at', 'updated_at', 'program_id'], 'integer'],
            [['title', 'content', 'program_id', 'description'],  'required'],
            ['user', 'required', 'when' => function($model){
                return $model->destination == 1;
            }],
            [['title', 'content', 'description'], 'string'],
            [['status', 'destination', 'attachment'], 'safe']
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

    public function getUserTasks()
    {
        return $this->hasMany(UserTask::className(), ['task_id' => 'id']);

    }

    public function getAttachment()
    {
        return $this->hasOne(File::className(), ['id' => 'attachment']);
    }

    public function sendMailForAll()
    {

        $attachment = $this->getAttachment()->one();

        $mail = Yii::$app->mailer->compose(
            ['html' => 'task_html', 'text' => 'task_text'],
            ['task' =>$this]
        )->setFrom('admin@kcet.com')->setSubject($this->title);

        if(isset($attachment)){
            $mail->attach(Yii::getAlias($attachment->path));
        }

        foreach ($this->userTasks as $userTask){

            $send =  $mail->setTo($userTask->user->email)->send();

            if(!$send) {
                return false;
            }
        }

        return  true;

    }

    public function sendMail()
    {
       $attachment = $this->getAttachment()->one();

       $mail =  Yii::$app->mailer->compose(
                ['html' => 'task_html', 'text' => 'task_text'],
                ['task' =>$this]
            )
            ->setFrom('admin@kcet.com')
            ->setTo($this->userTasks[0]->user->email)
            ->setSubject($this->title);

        if(isset($attachment)){
            $mail->attach(Yii::getAlias($attachment->path));
        }

        return $mail->send();
    }


}
