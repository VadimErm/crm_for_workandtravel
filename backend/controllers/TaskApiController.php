<?php


namespace backend\controllers;

use common\models\Task;
use common\models\UserTask;
use yii\rest\Controller;
use yii\filters\Cors;
use yii\web\Response;
use yii\base\ViewContextInterface;
use Yii;

class TaskApiController extends Controller implements ViewContextInterface
{
    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => Cors::className(),
                'cors' => [
                    'Origin' => ['*'],
                ]
            ],
            [
                'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],

            ],

        ];
    }

    public function verbs()
    {
        return [
            'get' => ['GET'],
        ];

    }

    public function getViewPath()
    {
        return '@backend/views/task';
    }

    public function actionReadTask($id)
    {
        $task = Task::findOne($id);
        $user = \Yii::$app->user;

        $task = Task::find()->where(['id' => $id])->with(['userTasks' => function ($query) use ($user) {
            $query->andWhere(['user_id' => $user->id]);
        }])->one();
        //return var_dump($task->userTasks);
        // TODO доделать выборку из базы в замисимости от user_task.status
        if($task->userTasks[0]->status == Task::NEW_TASK) {


            $readed = Yii::$app->db->createCommand()
                ->update('user_task', ['status' => 2], ['and', "user_id = $user->id", "task_id = $id"])
                ->execute();
        } else {
            $readed = true;
        }

        if(!is_null($task) && $readed){
          return  $this->renderAjax('task_modal',
                [
                    'task' =>$task
                ]);
        } else {
            return ['error' => 'The task das not exist'];
        }
    }

    public function actionChangeStatus($id, $status)
    {
        $user = \Yii::$app->user;

        if(Yii::$app->db->createCommand()
            ->update('user_task', ['status' => $status], ['and', "user_id = $user->id", "task_id = $id"])
            ->execute()) {
            return ['success'];
        } else {
            return ['error'];
        }


    }

}