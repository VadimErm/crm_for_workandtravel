<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of students';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'label' => 'Student',
                'format' => 'raw',
                'value' => function($model){
                    return !is_null($model->user->contact) ? $model->user->contact->fullname : $model->user->username;
                }


            ],
            'readed',

        ],
    ]); ?>
</div>
