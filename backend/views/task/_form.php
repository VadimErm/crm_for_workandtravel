<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers\ActiveFormHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">
    <input type="hidden" id="access-token" name="access-token"
           value="<?= Yii::$app->user->identity->getAccessToken() ?>">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($task, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($task, 'description')->textarea(['rows' =>3]) ?>

    <?php if($destination == 'particular') : ?>
    <?= $form->field($task, 'users')->widget(Select2::className(), [
        'data' => $students,

        'options' => [

            'placeholder' => 'Select a student ...'
        ],

    ])?>

    <?php endif; ?>

    <?= $form->field($task, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($task, 'program_id')->widget(Select2::className(), [
        'data' => $programsData,
        'options' => ['placeholder' => 'Select a program ...'],

    ])?>
    <?= ActiveFormHelper::textWithoutLabel($form, $task, 'attachment', [], 'hiddenInput') ?>


    <?php ActiveForm::end(); ?>

    <?= \common\widgets\file_loader_widget\FileLoaderWidget::widget([
        'userId' => Yii::$app->user->identity->getId(),
        'type' => 'attachment',
        'fileId' => $task->attachment
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($task->isNewRecord ? 'Create' : 'Update', ['form' =>'w0', 'class' => $task->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>





</div>
