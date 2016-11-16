<?php
/**
 * @var $this \yii\web\View
 */
?>

<?php \backend\assets\SweetAlertAsset::register($this) ?>

<div class="row">
    <input type="hidden" id="access-token" name="access-token" value="<?= Yii::$app->user->identity->getAccessToken() ?>">
    <?= $this->render('photo_3_5x4_5') ?>
    <?= $this->render('photo_10x15') ?>
    <?= $this->render('passport') ?>
    <?= $this->render('identification') ?>
    <?= $this->render('enquiry') ?>
    <?= $this->render('enquiry_trans') ?>
    <?= $this->render('birth_certificate') ?>
    <?= $this->render('additional_docs') ?>
</div>
