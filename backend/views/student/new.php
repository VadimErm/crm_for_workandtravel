<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

<h1>Добавление нового студентав базу</h1>
<div class="col-sm-6">
	<div class="contact-form">

		<?php $form = ActiveForm::begin(['fieldConfig' => [
			'options' => [
			'tag' => false,
			]
			]]);  ?>
			<div class="grp">
				<?= $form->field($model, 'email')->label('Email'); ?>
			</div>
			<div class="btn">
				<?= Html::submitButton('Submit', [ 'name' => 'contact-button']) ?>
			</div>

		<?php ActiveForm::end(); ?>

	</div>
</div>