<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payments';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= Html::encode($this->title) ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">


                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p class="text-muted font-13 m-b-30">
                    <?= Html::a('Create Payment', Url::to(['create', 'kcet_number' => $kcet_number]), ['class' => 'btn btn-success']) ?>
                </p>
                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'columns' => [

                                    'id',
                                    [
                                        'header' => 'Cash',
                                        'class' => 'yii\grid\CheckboxColumn',
                                        'checkboxOptions' => function ($model, $key, $index, $column) {
                                                if($model->is_cash == 1) {
                                                    return [ 'value' => $model->is_cash, 'checked' =>'checked', 'disabled' =>'disabled'];
                                                } else {
                                                    return [ 'value' => $model->is_cash, 'disabled' => 'disabled'];
                                                }

                                            },

                                    ],

                                    'kcet_number',
                                    'payment',



                                    [
                                        'attribute' => 'status',
                                        'value' => function ($data) {

                                                switch($data->status){
                                                    case 1:
                                                        return 'Оплачен';
                                                        break;
                                                    case 2:
                                                        return 'Удален';
                                                        break;
                                                    case 3:
                                                        return 'Ошибочный';
                                                        break;
                                                }

                                            }

                                    ],
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['datetime', 'php:Y-m-d H:i:s']

                                    ],

                                    'payment_check',

                                    ['class' => 'yii\grid\ActionColumn'],
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
