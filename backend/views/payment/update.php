<?php

use common\helpers\ActiveFormHelper;
use common\helpers\FileLoaderHelper;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Payment */

$this->title = 'Edit payment №:' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <input type="hidden" id="access-token" name="access-token"
           value="<?= Yii::$app->user->identity->getAccessToken() ?>">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'payment')->textInput(['disabled' =>'disabled']) ?>

    <?= $form->field($model, 'status')->widget(Select2::className(), [

        'data' => [1 => 'Paid', 2 => 'Deleted', 3 => 'Wrong'],
        'options' => ['placeholder' => 'Choose status'],
        'hideSearch' => true

    ])->label(false)?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'kcet_number', ['value' => $model->kcet_number, 'disabled' =>'disabled'], 'hiddenInput') ?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'payment_check', ['disabled' =>'disabled'], 'hiddenInput') ?>

    <?php ActiveForm::end(); ?>

    <div class="form-group">
        <label>Cashless
            <?php if($model->is_cash == false) : ?>
                <input type="checkbox" name="Payment[is_cash]" class="js-switch js-check-change" data-switchery="true" form="w0" disabled>
            <?php else : ?>
                <input type="checkbox" name="Payment[is_cash]" class="js-switch js-check-change" data-switchery="true" form="w0" checked disabled>
            <?php endif ?>
            Cash </label>
    </div>

    <?= $this->render('payment_check', [
        'loaded' => FileLoaderHelper::isExistsById($model->payment_check),
        'user_id' => $model->contract->contact->user->id,
        'model' => $model
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['form' =>'w0', 'class' => 'btn btn-success' ]) ?>
        <?= Html::a('Cancel', Url::to(['view-by', 'kcet_number' => $model->kcet_number]), ['class' => 'btn btn-primary']) ?>
    </div>

</div>
