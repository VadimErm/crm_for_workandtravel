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
                            <?= Html::a('Create Task', ['create', 'destination' => 'all'], ['class' => 'btn btn-success']) ?>
                        </p>
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

                                ['class' => 'yii\grid\ActionColumn'],
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

