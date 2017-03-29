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
            'query' => Task::find()->where(['destination' => Task::PARTICULAR])->orderBy(['updated_at' => SORT_DESC]),
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
            'query' => Task::find()->where(['destination' => Task::ALL])->orderBy(['updated_at' => SORT_DESC]),
            'pagination' => [
                'pageSize' => 15
            ]
        ]);


        return $this->render('all', [
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionNew($destination = null, $status = null)
    {
        $user = Yii::$app->user->identity;


        if(!is_null($destination) && $destination !== '0'){
            if(!is_null($status) && $status !== '0'){
                $tasks = $user->getUserTasks()->where(['status' => (int) $status])->with(['task' =>
                    function ($query) use ($destination) {
                        $query->andWhere(['destination' => $destination]);
                    }])->all();

            } else{
                $tasks = $user->getUserTasks()->where(['status' => Task::NEW_TASK])->orWhere(['status' => Task::READED])->with(['task' =>
                    function ($query) use ($destination) {
                        $query->andWhere(['destination' => $destination]);
                    }])->all();
            }


        } elseif(is_null($destination) || $destination == '0') {
            if(!is_null($status) && $status !== '0'){
                $tasks = $user->getUserTasks()->where(['status' => (int) $status])->with('task')->all();

            } else{
                $tasks = $user->getUserTasks()->where(['status' => Task::NEW_TASK])->orWhere(['status' => Task::READED])->with('task')->all();
            }

        }


        return $this->render('tasks', [
            'tasks' => $tasks
        ]);


    }

    public function actionDone($destination = null)
    {
        $user = Yii::$app->user->identity;

        if(!is_null($destination) && $destination !== '0'){

            $tasks = $user->getUserTasks()->where(['status' => Task::DONE])->with(['task' =>
                function ($query) use ($destination) {
                    $query->andWhere(['destination' => $destination]);
                }])->all();



        } elseif(is_null($destination) || $destination == '0') {

            $tasks = $user->getUserTasks()->where(['status' => Task::DONE])->with('task')->all();


        }
        $done = true;
        return $this->render('tasks', [
            'tasks' => $tasks,
            'done' => $done
        ]);

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
        $session = Yii::$app->session;
        $mail = false;

        if(isset(Yii::$app->request->post()['Task']['mail'][0]) && Yii::$app->request->post()['Task']['mail'][0] == 1 ){
            $mail = true;

        }

        if($destination =='1'){
            $task->destination = Task::PARTICULAR;
        } elseif ($destination == '2'){
            $task->destination = Task::ALL;
        }

        $programs = Program::find()->asArray()->all();
        $programsData = ArrayHelper::map($programs,'id', 'title');

        $students = User::getUsersByRole('student');
        $studentsName = Students::getStudentsNames();

        if(isset(Yii::$app->request->post()['Task']['user'])){

            $studentId =  Yii::$app->request->post()['Task']['user'];
        }



        if ($task->load(Yii::$app->request->post()) &&  $task->save()) {

            if($destination == Task::ALL) {
                foreach ($students as $student){
                    if($student->program_id == $task->program_id){
                        $task->link('users', $student, ['status' => Task::NEW_TASK]);

                    }

                }
                if ($mail){
                    if($task->sendMailForAll()){
                        $session->setFlash('success', "Success! The task $task->title was created and send on email.");
                    }
                } else {
                    $session->setFlash('success', " Success! The task $task->title was created.");
                }

                return $this->redirect(['all']);

            } elseif ($destination == Task::PARTICULAR){

                $student = User::findOne($studentId);
                $task->link('users', $student, ['status' => Task::NEW_TASK]);

                if ($mail){
                    if($task->sendMail()){
                        $session->setFlash('success', "Success! The task $task->title was created and send on email.");
                    }
                } else {
                    $session->setFlash('success', " Success! The task $task->title was created.");
                }

                return $this->redirect(['particular']);
            }



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

        $session = Yii::$app->session;
        $mail = false;

        if(isset(Yii::$app->request->post()['Task']['mail'][0]) && Yii::$app->request->post()['Task']['mail'][0] == 1 ){
            $mail = true;

        }

        $programs = Program::find()->asArray()->all();
        $programsData = ArrayHelper::map($programs,'id', 'title');
        $students = User::getUsersByRole('student');
        $studentsName = Students::getStudentsNames();

        if(isset(Yii::$app->request->post()['Task']['user'])){

            $studentId =  Yii::$app->request->post()['Task']['user'];
        }

        if ($task->load(Yii::$app->request->post()) && $task->save()) {

            if($destination == Task::PARTICULAR){

                $task->unlink('users', $task->users[0], true);
                $student = User::findOne($studentId);
                $task->link('users', $student);

                if ($mail){
                    if($task->sendMail()){
                        $session->setFlash('success', "Success! The task $task->title was updated and send on email.");
                    }
                } else {
                    $session->setFlash('success', " Success! The task $task->title was updated.");
                }

                return $this->redirect(['particular']);



            } elseif ($destination == Task::ALL){

                $task->unlinkAll('users', true);
                foreach ($students as $student){
                    if($student->program_id == $task->program_id){
                        $task->link('users', $student);
                    }

                }
                if ($mail){
                    if($task->sendMailForAll()){
                        $session->setFlash('success', "Success! The task $task->title was updated and send on email.");
                    }
                } else {
                    $session->setFlash('success', " Success! The task $task->title was updated.");
                }

                return $this->redirect(['all']);


            }



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
       // var_dump($task->attachment);exit;

        if(!is_null($task->attachment)){
          Yii::$app->fileLoader->removeFile($task->attachment);
        }



        if($destination == Task::ALL){
            $task->unlinkAll('users', true);
        } elseif ($destination == Task::PARTICULAR){
            $task->unlink('users', $task->users[0], true);
        }

        $task->delete();

        return $this->redirect([$view[$destination]]);
    }

    public function actionSendEmailForAll($id)
    {
        $task = $this->findModel($id);
        $session = Yii::$app->session;

        if($task->sendMailForAll()){
            $session->setFlash('success', "Success! The task $task->title was sent on email.");
        } else {
            $session->setFlash('fail', "Fail! The task $task->title wasn't sent.");
        }

        return $this->redirect(['all']);
    }

    public function actionSendEmail($id)
    {
        $task = $this->findModel($id);
        $session = Yii::$app->session;

        if($task->sendMail()){
            $session->setFlash('success', "Success! The task $task->title was sent on email.");
        } else {
            $session->setFlash('fail', "Fail! The task $task->title wasn't sent.");
        }

        return $this->redirect(['particular']);
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
