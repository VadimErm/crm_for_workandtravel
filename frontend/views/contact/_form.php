<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname_ipass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname_ipass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'birth_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'married')->textInput() ?>

    <?= $form->field($model, 'card_id')->textInput() ?>

    <?= $form->field($model, 'ipassport_id')->textInput() ?>

    <?= $form->field($model, 'language_id')->textInput() ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <?= $form->field($model, 'college_id')->textInput() ?>

    <?= $form->field($model, 'university_id')->textInput() ?>

    <?= $form->field($model, 'departure_date')->textInput() ?>

    <?= $form->field($model, 'arrival_date')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preferred_job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preferred_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'travel_with_whom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'work_search')->textInput() ?>

    <?= $form->field($model, 'social_security_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'another_fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kcet_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
