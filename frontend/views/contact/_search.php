<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fullname') ?>

    <?= $form->field($model, 'firstname_ipass') ?>

    <?= $form->field($model, 'lastname_ipass') ?>

    <?= $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'birth_country') ?>

    <?php // echo $form->field($model, 'birth_city') ?>

    <?php // echo $form->field($model, 'birth_region') ?>

    <?php // echo $form->field($model, 'married') ?>

    <?php // echo $form->field($model, 'card_id') ?>

    <?php // echo $form->field($model, 'ipassport_id') ?>

    <?php // echo $form->field($model, 'language_id') ?>

    <?php // echo $form->field($model, 'school_id') ?>

    <?php // echo $form->field($model, 'college_id') ?>

    <?php // echo $form->field($model, 'university_id') ?>

    <?php // echo $form->field($model, 'departure_date') ?>

    <?php // echo $form->field($model, 'arrival_date') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'skype') ?>

    <?php // echo $form->field($model, 'preferred_job') ?>

    <?php // echo $form->field($model, 'preferred_state') ?>

    <?php // echo $form->field($model, 'travel_with_whom') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'work_search') ?>

    <?php // echo $form->field($model, 'social_security_number') ?>

    <?php // echo $form->field($model, 'another_fullname') ?>

    <?php // echo $form->field($model, 'kcet_number') ?>

    <?php // echo $form->field($model, 'kcet_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
