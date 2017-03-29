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

        $task = $this->findTask($id);

        if($task->userTasks[0]->status == Task::NEW_TASK) {

            $readed = $this->changeStatus(Task::READED, $id);

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

    public function actionDoneTask()
    {
        $request = Yii::$app->request;
        if($request->getIsPatch()){
            $taskId = $request->getBodyParam('taskId');
            if($this->changeStatus(Task::DONE, $taskId)){
                return ['success'];
            } else {
                return ['error'];
            }
        } else {
            return ['error'];
        }



    }

    public function actionDeleteAttachment()
    {
        $request = Yii::$app->request;
        $userId = Yii::$app->user->getId();
        if($request->getIsPatch()){
            $taskId = $request->getBodyParam('taskId');
        }

        $task = $this->findTask($taskId);
        $attachment = $task->attachment;
        $task->attachment = null;
        $task->save();

        if(\Yii::$app->fileLoader->removeFile($attachment)){
            return ['status' => 'success', 'userId' =>$userId];
        } else {
            return ['fail'];
        }



    }

    protected function changeStatus($status, $id)
    {
        $user = \Yii::$app->user;
        return Yii::$app->db->createCommand()
            ->update('user_task', ['status' => $status], ['and', "user_id = $user->id", "task_id = $id"])
            ->execute();
    }

    protected function findTask($id)
    {
        $user = \Yii::$app->user;

        if (($task = Task::find()->where(['id' => $id])->with(['userTasks' => function ($query) use ($user) {
                $query->andWhere(['user_id' => $user->id]);
            }])->one()) !== null) {
            return $task;
        } else {
            throw new NotFoundHttpException('The requested task does not exist.');
        }

    }

}