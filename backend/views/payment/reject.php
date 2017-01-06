<?php


use common\helpers\ActiveFormHelper;
use common\helpers\FileLoaderHelper;
use common\models\Payment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Payment */

$this->title = 'Create Reject';
$this->params['breadcrumbs'][] = ['label' => 'Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reject-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <input type="hidden" id="access-token" name="access-token"
           value="<?= Yii::$app->user->identity->getAccessToken() ?>">

    <div class="form-group">
        <label for="withholding">Withholding</label>
        <input type="text" name="withholding" class="form-control" id="withholding">

    </div>
    <div class="form-group">
        <label for="delivery">Amount paid</label>
        <input type="text" name="delivery" class="form-control" id="delivery" disabled='disabled' value=<?= \common\helpers\PaymentsHelper::getAmountPaid($contract->payments) ?>>

    </div>
    <?php $form = ActiveForm::begin(['id' => 'w2']); ?>

    <?= $form->field($model, 'payment')->textInput(['readonly' => 'readonly'])->label('Delivery payment') ?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'status', ['value' => Payment::STATUS_REJECT], 'hiddenInput') ?>

    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'kcet_number', ['value' => $kcet_number], 'hiddenInput') ?>

    <?php ActiveForm::end(); ?>

    <?= $this->render('reject_application', [
        'loaded' => FileLoaderHelper::isExists('reject_application', $user_id),
        'user_id' => $user_id,

    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['form' =>'w2', 'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('Cancel', Url::to(['student/students']), ['class' => 'btn btn-primary']) ?>
    </div>

</div>
