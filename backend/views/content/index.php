<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */

/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-index">

    <h1>Pages</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="x_panel">

        <div class="x_title">
            <h2><?= Html::encode($this->title) ?></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'headerRowOptions' => ['class' => 'headings'],
                'tableOptions' => ['class' => 'table table-striped table-bordered   table_content'],

                'columns' => [
                    'id',
                    'title',
                    [
                        'attribute' => 'content',
                        'value' => function ($data) {

                                return substr($data->content,0,300).'...';

                            }

                    ],
                    'slug',
                    [
                        'attribute' => 'created_at',
                        'format' => ['datetime', 'php:Y-m-d H:i:s']

                    ],

                    [
                        'attribute' => 'updated_at',
                        'format' => ['datetime', 'php:Y-m-d H:i:s'],

                    ],


                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>
