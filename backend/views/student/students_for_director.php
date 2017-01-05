<?php
/**
 * @var $this \yii\web\View
 */
use common\helpers\PaymentsHelper;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Students</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <?= GridView::widget([
                                'options' => ['id' => 'w1', 'class' => 'grid-view'],
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    [
                                        'attribute' => 'fullname',
                                        'label' => 'Fullname'
                                    ],

                                    [
                                        'attribute' => 'program',
                                        'value' => 'user.program.title',
                                        'label' => "Program"
                                    ],
                                    [
                                        'attribute' => 'kcet_number',
                                        'label' => 'Contract Number'
                                    ],
                                    [
                                        'attribute' => 'kcet_date',
                                        'label' => 'Contract Date',
                                        'format' => ['date', 'php: d-m-Y']
                                    ],
                                    [
                                        'attribute' => 'full_price',
                                        'value' => 'user.program.price',
                                        'label' => "Full price",
                                        'format' => 'currency'
                                    ],
                                    [
                                        'attribute' => 'amount_paid',
                                        'value' =>function($model) {
                                                   if(isset($model->contract)){
                                                        $payments = $model->contract->payments;
                                                        return PaymentsHelper::getAmountPaid($payments);

                                                    } else {
                                                        return null;
                                                    }
                                                },
                                        'label' => "Amount paid",
                                        'format' => 'currency'

                                    ],
                                    [
                                        'attribute' => 'rest_payment',
                                        'value' => function($model) {
                                                    if($model->status == 3) {

                                                        $payment = $model->contract->getPayments()->where(['status' =>\common\models\Payment::STATUS_REJECT])->one()->payment;
                                                        if(!empty($payment)){
                                                            return $payment;
                                                        } else {
                                                            return 0;
                                                        }


                                                    } else {
                                                        if(isset($model->contract)){

                                                            $payments = $model->contract->payments;

                                                            return $model->user->program->price - PaymentsHelper::getAmountPaid($payments);
                                                        } else {
                                                            return 0;
                                                        }
                                                    }

                                                },
                                        'label' => "Rest payment",
                                        'format' => 'currency'
                                    ],


                                    [
                                        'attribute' => 'status',
                                        'format' => 'raw',
                                        'label' => 'Status',
                                        'value' => function($model) {

                                                switch ($model->status) {
                                                    case 1:
                                                        return Html::tag('span', 'Applicant',['class' => "label label-default"] );
                                                        break;
                                                    case 2;
                                                        return Html::tag('span', 'Participant',['class' => "label label-success"] );
                                                        break;
                                                    case 3;
                                                        return Html::tag('span', 'Reject',['class' => "label label-danger"] );
                                                        break;

                                                }
                                            },
                                        'filter' => [null => 'All','1' => 'Applicant', '2' => 'Participant', '3' => 'Reject']
                                    ],



                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => '{payments} {reject}',
                                        'buttons' =>
                                            [

                                                'payments' => function ($url, $model, $key) {

                                                        $url = Url::to(['payment/view-by', 'kcet_number' => $model->user->contact->kcet_number]);
                                                        if($model->status !== 1) {
                                                            return Html::a('<i class="fa fa-money" aria-hidden="true" title="Payments"></i>',  $url);
                                                        } else {
                                                            return null;
                                                        }
                                                    },
                                                'reject' => function ($url, $model, $key) {

                                                        $url = Url::to(['payment/create', 'kcet_number' => $model->user->contact->kcet_number, 'reject' => true]);
                                                        if($model->status !== 3){
                                                            return Html::a('<i class="fa fa-times" aria-hidden="true" title="Reject"></i>', $url);
                                                        } else {
                                                            return null;
                                                        }


                                                    }

                                            ]
                                    ],
                                ],
                            ]); ?>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>