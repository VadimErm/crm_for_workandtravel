<?php
/**
 * @var $this \yii\web\View
 */
use common\helpers\FileLoaderHelper;

\backend\assets\SweetAlertAsset::register($this)
?>

<?php
$roleArr = \Yii::$app->authManager->getRolesByUser(\Yii::$app->user->getId());
$role = reset($roleArr)->name;
?>


<div class="row">
    <input type="hidden" id="access-token" name="access-token"
           value="<?= Yii::$app->user->identity->getAccessToken() ?>">
    <?= $this->render('photo_3_5x4_5', [
        'loaded' => FileLoaderHelper::isExists('photo_3_5x4_5', $user_id),
        'user_id' => $user_id,
        'role' => $role,
    ]) ?>
    <?= $this->render('photo_10x15', [
        'loaded' => FileLoaderHelper::isExists('photo_10x15', $user_id),
        'user_id' => $user_id,
        'role' => $role,
    ]) ?>
    <?= $this->render('passport', [
        'loaded' => FileLoaderHelper::isExists('passport', $user_id),
        'user_id' => $user_id,
        'role' => $role,
    ]) ?>
    <?= $this->render('identification', [
        'loaded' => FileLoaderHelper::isExists('identification', $user_id),
        'user_id' => $user_id,
        'role' => $role,
    ]) ?>
    <?= $this->render('enquiry', [
        'loaded' => FileLoaderHelper::isExists('enquiry', $user_id),
        'user_id' => $user_id,
        'role' => $role
    ]) ?>
    <?= $this->render('enquiry_trans', [
        'loaded' => FileLoaderHelper::isExists('enquiry_trans', $user_id),
        'user_id' => $user_id,
        'role' => $role
    ]) ?>
    <?= $this->render('birth_certificate', [
        'loaded' => FileLoaderHelper::isExists('birth_certificate', $user_id),
        'user_id' => $user_id,
        'role' => $role
    ]) ?>
    <?= $this->render('additional_docs', [
        'loaded' => FileLoaderHelper::isExists('additional_docs', $user_id),
        'user_id' => $user_id,
        'role' => $role
    ]) ?>

    <!--Manager files-->
    <?= $this->render('manager_documents', [
        'user_id' => $user_id,
        'role' => $role
    ]) ?>

</div>
