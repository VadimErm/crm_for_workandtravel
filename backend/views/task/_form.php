<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers\ActiveFormHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div id="task-form" data-task-id="<?php if(isset($task->id)){ echo $task->id;}?>">
    <input type="hidden" id="access-token" name="access-token"
           value="<?= Yii::$app->user->identity->getAccessToken() ?>">

    <?php $form = ActiveForm::begin(['requiredCssClass' => '']); ?>

    <?= $form->field($task, 'title')->textInput(['maxlength' => true])->label('Title'. Html::tag('span', '*',['class'=>'required'])); ?>

    <?= $form->field($task, 'description')->textarea(['rows' =>3])->label('Description'. Html::tag('span', '*',['class'=>'required'])); ?>

    <?php if($destination == \common\models\Task::PARTICULAR) : ?>
        <?= $form->field($task, 'user')->widget(Select2::className(), [
            'data' => $students,

            'options' => [

                'placeholder' => 'Select a student ...'
            ],

        ])->label('Students'. Html::tag('span', '*',['class'=>'required'])); ?>

    <?php endif; ?>

    <?= $form->field($task, 'content')->textarea(['rows' => 6])->label('Text'. Html::tag('span', '*',['class'=>'required'])); ?>

    <?= $form->field($task, 'program_id')->widget(Select2::className(), [
        'data' => $programsData,
        'options' => ['placeholder' => 'Select a program ...'],

    ])->label('Program'. Html::tag('span', '*',['class'=>'required']));?>
    <?= $form->field($task, 'mail')->checkboxList([
        1 => 'Send task on email',

    ]); ?>
    <?= ActiveFormHelper::textWithoutLabel($form, $task, 'attachment', [], 'hiddenInput') ?>


    <?php ActiveForm::end(); ?>

    <?= \common\widgets\file_loader_widget\FileLoaderWidget::widget([
        'userId' => Yii::$app->user->identity->getId(),
        'type' => 'attachment',
        'fileId' => $task->attachment,
        'edit' => true
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($task->isNewRecord ? 'Create' : 'Update', ['form' =>'w0', 'class' => $task->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>





</div>
