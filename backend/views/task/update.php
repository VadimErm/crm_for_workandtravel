<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Task */

$this->title = 'Update Task: ' . $task->title;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $task->title, 'url' => ['view', 'id' => $task->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'task' => $task,
        'programsData' => $programsData,
        'students' => $students,
        'destination' => $destination
    ]) ?>

</div>
