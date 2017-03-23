<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\helpers\Url as UrlHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Task */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>






<div class="task-view">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Task <?= Html::encode($this->title) ?></h2>
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
                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <?= DetailView::widget([
                                'model' => $model,
                                'attributes' => [
                                    'title',
                                    'description',
                                    'content:ntext',
                                    [
                                        'attribute' => 'attachment',
                                        'value' => !empty($model->attachment) ? Html::tag('img', '',['src' => UrlHelper::fileGet($model->attachment), 'width' => '500']) : '',
                                        'format' => 'raw'
                                    ],
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['datetime', 'php:d-m-Y']

                                    ],

                                    [
                                        'attribute' => 'updated_at',
                                        'format' => ['datetime', 'php:d-m-Y']

                                    ],
                                ],
                            ]) ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



