<?php


namespace backend\controllers;

use common\models\Task;
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

    public function actionGetTask($id)
    {
        $task = Task::findOne($id);

        if(!is_null($task)){
          return  $this->renderAjax('task_modal',
                [
                    'task' =>$task
                ]);
        } else {
            return ['error' => 'The task das not exist'];
        }
    }

    public function actionChangeStatus($status)
    {
        $user = \Yii::$app->user;





    }

}