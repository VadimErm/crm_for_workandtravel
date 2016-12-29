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
    <input type="hidden" id="access-token" name="access-token"
           value="<?= Yii::$app->user->identity->getAccessToken() ?>">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment')->textInput() ?>



    <?= $form->field($model, 'status')->widget(Select2::className(), [

        'data' => [1 => 'Оплачен', 2 => 'Удален', 3 => 'Ошибочный'],
        'options' => ['placeholder' => 'Выберите статус'],
        'hideSearch' => true

    ])->label(false)?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'kcet_number', ['value' => $kcet_number], 'hiddenInput') ?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'payment_check', [], 'hiddenInput') ?>

    <?php ActiveForm::end(); ?>

    <div class="form-group">
        <label>Безналичные
            <input type="checkbox" name="Payment[is_cash]" class="js-switch js-check-change" data-switchery="true" form="w0"> Наличные </label>

    </div>

    <?= $this->render('payment_check', [
        'loaded' => FileLoaderHelper::isExists('payment_check', $user_id),
        'user_id' => $user_id,
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['form' =>'w0', 'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

</div>
