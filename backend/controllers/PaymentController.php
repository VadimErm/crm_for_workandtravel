<?php

namespace backend\controllers;

use common\models\Contact;
use common\models\Contract;
use Yii;
use common\models\Payment;
use common\models\PaymentSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PaymentController implements the CRUD actions for Payment model.
 */
class PaymentController extends BackendController
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
        ];
    }

    /**
     * Lists all Payment models.
     * @return mixed
     */
    public function actionIndex()
    {

        $dataProvider = new ActiveDataProvider([
            'query' => Payment::find(),
            'pagination' => [
                'pageSize' => 10
            ]

        ]);

        return $this->render('index', [

            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionViewBy($kcet_number, $status = null)
    {
        if($status !== null) {
            $filter = ['kcet_number' => $kcet_number, 'status' => $status];
        } else {
            $filter = ['kcet_number' => $kcet_number];
        }

        if($contract = Contract::findOne(['kcet_number' => $kcet_number])) {
                $contactStatus = $contract->contact->status;
        } else {
            throw new NotFoundHttpException();
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Payment::find()->andWhere($filter),
            'pagination' => [
                'pageSize' => 10
            ]
        ]);

        return $this->render('index',[
            'kcet_number' => $kcet_number,
            'dataProvider' => $dataProvider,
            'contactStatus' => $contactStatus

        ]);

    }

    /**
     * Displays a single Payment model.
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
     * Creates a new Payment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($kcet_number, $reject = false)
    {
        $view = $reject == false ? 'create' : 'reject';

        $model = new Payment();
        if($contract = Contract::findOne(['kcet_number' => $kcet_number])) {
            $user_id = $contract->contact->user->id;
         } else {
            throw new NotFoundHttpException();
        }


        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            //var_dump($model);exit;

            if($reject == true) {
                $contact = $contract->contact;
                $contact->status = Contact::REJECT;
                $contact->save();
            }
            return $this->redirect(['view-by', 'kcet_number' => $kcet_number]);

        } else {
            return $this->render($view, [
                'kcet_number' => $kcet_number,
                'model' => $model,
                'user_id' => $user_id,
                'contract' => $contract

            ]);
        }
    }




    /**
     * Updates an existing Payment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Payment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    /*public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }*/

    /**
     * Finds the Payment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Payment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Payment::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}
