<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contact */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullname',
            'firstname_ipass',
            'lastname_ipass',
            'birth_date',
            'birth_country',
            'birth_city',
            'birth_region',
            'married',
            'card_id',
            'ipassport_id',
            'language_id',
            'school_id',
            'college_id',
            'university_id',
            'departure_date',
            'arrival_date',
            'email:email',
            'skype',
            'preferred_job',
            'preferred_state',
            'travel_with_whom',
            'created_at',
            'updated_at',
            'status',
            'work_search',
            'social_security_number',
            'another_fullname',
            'kcet_number',
            'kcet_date',
        ],
    ]) ?>

</div>
