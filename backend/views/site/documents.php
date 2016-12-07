<?php
/**
 * @var $this \yii\web\View
 */
use common\helpers\FileLoaderHelper;

\backend\assets\SweetAlertAsset::register($this)
?>

<div class="row">
    <input type="hidden" id="access-token" name="access-token"
           value="<?= Yii::$app->user->identity->getAccessToken() ?>">
    <?= $this->render('photo_3_5x4_5', [
        'loaded' => FileLoaderHelper::isExists('photo_3_5x4_5')
    ]) ?>
    <?= $this->render('photo_10x15', [
        'loaded' => FileLoaderHelper::isExists('photo_10x15')
    ]) ?>
    <?= $this->render('passport', [
        'loaded' => FileLoaderHelper::isExists('passport')
    ]) ?>
    <?= $this->render('identification', [
        'loaded' => FileLoaderHelper::isExists('identification')
    ]) ?>
    <?= $this->render('enquiry', [
        'loaded' => FileLoaderHelper::isExists('enquiry')
    ]) ?>
    <?= $this->render('enquiry_trans', [
        'loaded' => FileLoaderHelper::isExists('enquiry_trans')
    ]) ?>
    <?= $this->render('birth_certificate', [
        'loaded' => FileLoaderHelper::isExists('birth_certificate')
    ]) ?>
    <?= $this->render('additional_docs', [
        'loaded' => FileLoaderHelper::isExists('additional_docs')
    ]) ?>
</div>
