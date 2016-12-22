<?php

use common\helpers\FileLoaderHelper;

\backend\assets\SweetAlertAsset::register($this)
?>
<?php $role = reset(\Yii::$app->authManager->getRolesByUser(\Yii::$app->user->getId()))->name;?>

<?= $this->render('ds_2019', [
    'loaded' => FileLoaderHelper::isExists('ds_2019'),
    'role' => $role
]) ?>

<?= $this->render('visa_j1', [
    'loaded' => FileLoaderHelper::isExists('visa_j1'),
    'role' => $role
]) ?>

<?= $this->render('air_tickets', [
    'loaded' => FileLoaderHelper::isExists('air_tickets'),
    'role' => $role
]) ?>

<?= $this->render('air_tickets_domestic', [
    'loaded' => FileLoaderHelper::isExists('air_tickets_domestic'),
    'role' => $role
]) ?>

<?= $this->render('isic', [
    'loaded' => FileLoaderHelper::isExists('isic'),
    'role' => $role
]) ?>

<?= $this->render('bank_card', [
    'loaded' => FileLoaderHelper::isExists('bank_card'),
    'role' => $role
]) ?>

