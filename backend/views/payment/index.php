<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\helpers\Url as UrlHelper;
use yii\widgets\ActiveForm;

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
            <div class="x_content payments">
                <p class="text-muted font-13 m-b-30">
                    <?php if($contactStatus == 3){
                        $buttons = '{view}';
                    ?>

                    <?php } else {
                        $buttons = '{view} {update}';
                    ?>
                        <?= Html::a('Create Payment', Url::to(['create', 'kcet_number' => $kcet_number]), ['class' => 'btn btn-success']) ?>
                    <?php } ?>

                    <?= Html::a('Back to students', Url::to(['student/students']), ['class' => 'btn btn-primary']) ?>

                        <?= Select2::widget(
                            [
                                'name' => 'status',
                                'data' => [
                                    "kcet_number=$kcet_number" => 'All',
                                    "kcet_number=$kcet_number&status=1" => 'Paid',
                                    "kcet_number=$kcet_number&status=2" => 'Deleted',
                                    "kcet_number=$kcet_number&status=3" => 'Wrong',
                                    "kcet_number=$kcet_number&status=4" => 'Reject'
                                ],
                                'options' => ['placeholder' => 'Choose status'],
                                'hideSearch' => true,
                                'pluginEvents' => [
                                    'select2:select' => "function(e) {
                                            var val = e.currentTarget.value;
                                            var url = 'http://kset.loc/admin/payment/view-by?'+val;
                                            location.assign(url);
                                        }",
                                ]


                            ])
                        ?>

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

                                    [
                                        'attribute' => 'payment',
                                        'format' => 'currency',
                                        'value' => function ($model) {
                                                if(!empty($model->payment)){
                                                    return $model->payment;
                                                } else {
                                                    return 0;
                                                }
                                            }
                                    ],

                                    [
                                        'attribute' => 'status',
                                        'format' => 'raw',
                                        'value' => function ($model) {

                                                switch($model->status){
                                                    case 1:
                                                        return Html::tag('span', 'Paid',['class' => "label label-success"] );
                                                        break;
                                                    case 2:
                                                        return Html::tag('span', 'Deleted',['class' => "label label-default"] );
                                                        break;
                                                    case 3:
                                                        return Html::tag('span', 'Wrong',['class' => "label label-warning"] );
                                                        break;
                                                    case 4:
                                                        return Html::tag('span', 'Reject',['class' => "label label-danger"] );
                                                        break;
                                                }

                                            }

                                    ],
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['datetime', 'php:Y-m-d H:i:s']

                                    ],


                                    [
                                        'attribute' => 'payment_check',
                                        'format' => 'raw',
                                        'value' => function($model) {
                                                if($model->status !==4){
                                                    if(!empty($model->payment_check)){
                                                        return Html::tag('img', '',['src' => UrlHelper::fileGet($model->payment_check), 'height' => '100']);
                                                    } else {
                                                        return '<span></span>';
                                                    }
                                                } else {
                                                   return Html::tag('img', '',['src' => UrlHelper::fileGet('reject_application', $model->contract->contact->user->id), 'height' => '100']);
                                                }



                                            }
                                    ],

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => $buttons,
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
