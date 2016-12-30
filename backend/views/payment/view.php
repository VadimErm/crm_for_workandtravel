<?php

use common\helpers\DetailViewStatusValueHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use common\helpers\Url as UrlHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Payment №<?= Html::encode($this->title) ?></h2>
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
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
                    <?= Html::a('Back to applicants', Url::to(['view-by-kcet', 'kcet_number' => $model->kcet_number]), ['class' => 'btn btn-primary']) ?>
                </p>

                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?= DetailView::widget([
                                'model' => $model,
                                'attributes' => [

                                    'kcet_number',
                                    [
                                        'attribute' => 'payment',
                                        'format' => 'currency'
                                    ],

                                    [
                                        'attribute' => 'status',
                                        'value' =>DetailViewStatusValueHelper::getValue($model->status),

                                        'format' => 'raw'

                                    ],

                                    [
                                        'attribute' => 'is_cash',
                                        'label' => 'Cash',
                                        'value' => $model->is_cash == 1 ? 'Наличные' : 'Безнал',
                                        'format' => 'raw'

                                    ],
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['datetime', 'php:Y-m-d H:i:s']

                                    ],

                                    [
                                        'attribute' => 'updated_at',
                                        'format' => ['datetime', 'php:Y-m-d H:i:s']

                                    ],

                                    [
                                        'attribute' => 'payment_check',

                                        'value' => !empty($model->payment_check) ? Html::tag('img', '',['src' => UrlHelper::fileGet($model->payment_check), 'width' => '500'])
                                                                                  : '<span></span>',
                                        'format' => 'raw'

                                    ]
                                ],
                            ]) ?>


                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
