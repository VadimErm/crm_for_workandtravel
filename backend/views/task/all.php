<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks for all students';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="task-index">
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

                </p>
                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">



                        <p>
                            <?= Html::a('Create Task', ['create', 'destination' => '2'], ['class' => 'btn btn-success']) ?>
                        </p>
                        <?php if(Yii::$app->session->hasFlash('success')):?>
                            <div class="alert alert-success" role="alert" id="task-alert"><?= Yii::$app->session->getFlash('success'); ?></div>
                        <?php elseif(Yii::$app->session->hasFlash('fail')): ?>
                            <div class="alert alert-danger" role="alert" id="task-alert"><?= Yii::$app->session->getFlash('fail'); ?></div>
                        <?php endif; ?>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,

                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],
                                [
                                    'label' => 'Students',
                                    'format' => 'raw',
                                    'value' => function($model){
                                         return Html::a('students', Url::to(['student/students-task', 'taskId' => $model->id]));
                                    }


                                ],
                                'title',
                                'description',

                                'content:ntext',
                                [
                                    'attribute' => 'created_at',
                                    'format' => ['datetime', 'php:d-m-Y']
                                ],
                                [
                                    'attribute' => 'updated_at',
                                    'format' => ['datetime', 'php:d-m-Y']
                                ],

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'template' => '{view} {update} {delete} {sendemail}',
                                    'buttons' =>
                                    [
                                            'sendemail' => function($url, $model, $key)
                                            {
                                                $url = Url::to(['task/send-email-for-all', 'id' => $model->id]);

                                                return Html::a('<i class="fa fa-envelope-open-o" aria-hidden="true" title="Send email"></i>', $url);


                                            }

                                    ]
                                ],
                            ],
                        ]); ?>
                    </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</div>

