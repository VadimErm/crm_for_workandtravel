<?php

use common\helpers\ActiveFormHelper;
use common\helpers\FileLoaderHelper;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment')->textInput() ?>

    <input type="checkbox" name="Payment[is_cash]" class="js-switch" data-switchery="true">

    <?= $this->render('payment_check', [
        'loaded' => FileLoaderHelper::isExists('payment_check', $user_id),
        'user_id' => $user_id,
    ]) ?>

    <?= $form->field($model, 'status')->widget(Select2::className(), [

        'data' => [1 => 'Оплачен', 2 => 'Удален', 3 => 'Ошибочный'],
        'options' => ['placeholder' => 'Выберите статус'],
        'hideSearch' => true

    ])->label(false)?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'kcet_number', ['value' => $kcet_number], 'hiddenInput') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
