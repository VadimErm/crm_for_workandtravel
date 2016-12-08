<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model common\models\Agreement */

$this->title = 'Create Agreement';
$this->params['breadcrumbs'][] = ['label' => 'Agreements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agreement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="agreement-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'agreement')->widget(CKEditor::className(), ['options' => ['rows' => 6], 'preset' => 'basic']) ?>

        <?= $form->field($model, 'program_id')->widget(Select2::className(), [

            'data' => $programs,
            'options' => ['placeholder' => 'Select a program ...'],


        ])?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
