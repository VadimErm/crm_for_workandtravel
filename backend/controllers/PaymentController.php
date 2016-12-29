<?php

namespace backend\controllers;

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

    public function actionViewByKcet($kcet_number)
    {

        $dataProvider = new ActiveDataProvider([
            'query' => Payment::find()->andWhere(['kcet_number' => $kcet_number]),
            'pagination' => [
                'pageSize' => 10
            ]
        ]);

        return $this->render('index',[
            'kcet_number' => $kcet_number,
            'dataProvider' => $dataProvider,

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
    public function actionCreate($kcet_number)
    {
        $model = new Payment();
        $user_id = Contract::findOne(['kcet_number' => $kcet_number])->contact->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //var_dump($model);exit;
            return $this->redirect(['view-by-kcet', 'kcet_number' => $kcet_number]);
        } else {
            return $this->render('create', [
                'kcet_number' => $kcet_number,
                'model' => $model,
                'user_id' => $user_id
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
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

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
