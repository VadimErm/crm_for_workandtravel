<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap\Alert;
use yii\helpers\Url;
use kartik\select2\Select2;
?>

<h3>Invite student</h3>
<?php $messageError = Yii::$app->session->getFlash('error'); ?>
<?php $messageSuccess = Yii::$app->session->getFlash('success'); ?>
<div class="row-fluid">
    <?php if (!empty($messageSuccess)) : ?>
        <?= Alert::widget([
            'options' => [
                'class' => 'alert-success',
            ],
            'body' => $messageSuccess,
        ]);
        ?>
    <?php endif; ?>
    <?php if (!empty($messageError)) : ?>
        <?= Alert::widget([
            'options' => [
                'class' => 'alert-error',
            ],
            'body' => $messageError,
        ]);
        ?>
    <?php endif; ?>
</div>
<div class="row-fluid">
<div class="col-sm-4">
	<div class="contact-form">

		<?php $form = ActiveForm::begin(['fieldConfig' => [
			'options' => [
			'tag' => false,
			]
			]]);  ?>
			<div class="grp">
				<?= $form->field($model, 'email')->label('Email'); ?>
			</div>
            <div class="grp">
                <?= $form->field($model, 'program_id')->widget(Select2::className(), [
                    'data' => $data,
                    'options' => ['placeholder' => 'Select a program ...'],

                ])?>
            </div>
			<div class="btn">
				<?= Html::submitButton('Submit', [ 'name' => 'contact-button', 'class' => 'btn btn-default submit']) ?>
			</div>

		<?php ActiveForm::end(); ?>

	</div>
</div>
</div>