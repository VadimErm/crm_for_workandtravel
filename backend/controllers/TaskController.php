<?php

namespace backend\controllers;

use common\models\File;
use common\models\Program;
use common\models\Students;
use common\models\User;
use common\models\UserTask;
use Yii;
use common\models\Task;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TaskController implements the CRUD actions for Task model.
 */
class TaskController extends BackendController
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['manager', 'main_manager'],
                    ],

                    [
                        'allow' => true,
                        'actions' => ['new', 'done'],
                        'roles' => ['student']
                    ]

                ]
            ]

        ];
    }

    /**
     * Lists all Task models.
     * @return mixed
     */
    public function actionParticular()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Task::find()->where(['destination' => Task::PARTICULAR]),
            'pagination' => [
                'pageSize' => 5
            ]
        ]);
        return $this->render('particular', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAll()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Task::find()->where(['destination' => Task::ALL]),
            'pagination' => [
                'pageSize' => 5
            ]
        ]);


        return $this->render('all', [
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionNew()
    {
        $user = Yii::$app->user->identity;

        $tasks = $user->tasks;

        return $this->render('tasks', [
            'tasks' => $tasks
        ]);


    }

    public function actionDone(){

    }

    /**
     * Displays a single Task model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Task model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($destination)
    {

        $task = new Task();
        if($destination =='particular'){
            $task->destination = Task::PARTICULAR;
        } elseif ($destination == 'all'){
            $task->destination = Task::ALL;
        }

        $programs = Program::find()->asArray()->all();
        $programsData = ArrayHelper::map($programs,'id', 'title');

        $students = User::getUsersByRole('student');
        $studentsName = Students::getStudentsNames();

        if(isset(Yii::$app->request->post()['Task']['users'])){

            $studentId =  Yii::$app->request->post()['Task']['users'];
        }

        /*echo "<pre>";
        var_dump(Yii::$app->request->post());
        echo "</pre>" ;
        exit;*/


        if ($task->load(Yii::$app->request->post()) &&  $task->save()) {


            if($destination == 'all') {
                foreach ($students as $student){
                    if($student->program_id == $task->program_id){
                        $task->link('users', $student, ['status' => Task::NEW_TASK]);

                    }

                }
            } elseif ($destination == 'particular'){
                $student = User::findOne($studentId);
                $task->link('users', $student, ['status' => Task::NEW_TASK]);
            }


            return $this->redirect(['view', 'id' => $task->id]);
        } else {
            return $this->render('create', [
                'task' => $task,
                'programsData' => $programsData,
                'students' => $studentsName,
                'destination' => $destination
            ]);
        }
    }

    /**
     * Updates an existing Task model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $task = $this->findModel($id);
        $destination = $task->destination;

        /*echo "<pre>";
            var_dump($task);
            echo "</pre>" ;
            exit;*/
        $programs = Program::find()->asArray()->all();
        $programsData = ArrayHelper::map($programs,'id', 'title');
        $students = User::getUsersByRole('student');
        $studentsName = Students::getStudentsNames();

        if(isset(Yii::$app->request->post()['Task']['users'])){

            $studentId =  Yii::$app->request->post()['Task']['users'];
        }

        if ($task->load(Yii::$app->request->post()) && $task->save()) {

            if($destination == Task::PARTICULAR){

                $task->unlink('users', $task->users[0], true);
                $student = User::findOne($studentId);
                $task->link('users', $student);

            } elseif ($destination == Task::ALL){

                $task->unlinkAll('users', true);
                foreach ($students as $student){
                    if($student->program_id == $task->program_id){
                        $task->link('users', $student);
                    }

                }

            }


            return $this->redirect(['view', 'id' => $task->id]);
        } else {
            return $this->render('update', [
                'task' => $task,
                'programsData' => $programsData,
                'students' => $studentsName,
                'destination' => $destination
            ]);
        }
    }

    /**
     * Deletes an existing Task model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $view = [
            1 => 'particular',
            2 => 'all'
        ];

        $task = $this->findModel($id);
        $destination = $task->destination;

        if(!is_null($task->attachment)){
            $file = File::findOne($task->attachment);
            $file->delete();
        }



        if($destination == Task::ALL){
            $task->unlinkAll('users', true);
        } elseif ($destination == Task::PARTICULAR){
            $task->unlink('users', $task->users[0], true);
        }

        $task->delete();

        return $this->redirect([$view[$destination]]);
    }



    /**
     * Finds the Task model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Task the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (($task = Task::find()->with('users')->where(['id'=>$id])->one()) !== null) {
            return $task;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}
