<?php

use common\helpers\FileLoaderHelper;

\backend\assets\SweetAlertAsset::register($this)
?>


<?= $this->render('ds_2019', [
    'loaded' => FileLoaderHelper::isExists('ds_2019', $user_id),
    'role' => $role,
    'user_id' => $user_id
]) ?>

<?= $this->render('visa_j1', [
    'loaded' => FileLoaderHelper::isExists('visa_j1', $user_id),
    'role' => $role,
    'user_id' => $user_id
]) ?>

<?= $this->render('air_tickets', [
    'loaded' => FileLoaderHelper::isExists('air_tickets', $user_id),
    'role' => $role,
    'user_id' => $user_id
]) ?>

<?= $this->render('air_tickets_domestic', [
    'loaded' => FileLoaderHelper::isExists('air_tickets_domestic', $user_id),
    'role' => $role,
    'user_id' => $user_id
]) ?>

<?= $this->render('isic', [
    'loaded' => FileLoaderHelper::isExists('isic', $user_id),
    'role' => $role,
    'user_id' => $user_id
]) ?>

<?= $this->render('bank_card', [
    'loaded' => FileLoaderHelper::isExists('bank_card', $user_id),
    'role' => $role,
    'user_id' => $user_id
]) ?>

