<?php

use common\helpers\ActiveFormHelper;
use common\helpers\FileLoaderHelper;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
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

        'data' => [1 => 'Paid', 2 => 'Deleted', 3 => 'Wrong'],
        'options' => ['placeholder' => 'Choose status'],
        'hideSearch' => true

    ])->label(false)?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'kcet_number', ['value' => $kcet_number], 'hiddenInput') ?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'payment_check', [], 'hiddenInput') ?>

    <?php ActiveForm::end(); ?>

    <div class="form-group">
        <label>Cashless
            <input type="checkbox" name="Payment[is_cash]" class="js-switch js-check-change" data-switchery="true" form="w0"> Cash </label>

    </div>

    <?= $this->render('payment_check', [
        'loaded' => FileLoaderHelper::isExistsById($model->payment_check),
        'user_id' => $user_id,
        'model' => $model
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['form' =>'w0', 'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancel', Url::to(['view-by', 'kcet_number' => $kcet_number]), ['class' => 'btn btn-primary']) ?>
    </div>

</div>
