<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks for particular student';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Task', ['create', 'destination' => 'particular'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'status',
            [
                'label' => 'Student',
                'format' => 'raw',
                'value' => function($model){
                    return !is_null($model->users[0]->contact) ? $model->users[0]->contact->fullname : $model->users[0]->username;
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
