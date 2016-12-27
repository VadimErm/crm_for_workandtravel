<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fullname',
            'firstname_ipass',
            'lastname_ipass',
            'birth_date',
            // 'birth_country',
            // 'birth_city',
            // 'birth_region',
            // 'married',
            // 'card_id',
            // 'ipassport_id',
            // 'language_id',
            // 'school_id',
            // 'college_id',
            // 'university_id',
            // 'departure_date',
            // 'arrival_date',
            // 'email:email',
            // 'skype',
            // 'preferred_job',
            // 'preferred_state',
            // 'travel_with_whom',
            // 'created_at',
            // 'updated_at',
            // 'status',
            // 'work_search',
            // 'social_security_number',
            // 'another_fullname',
            // 'kcet_number',
            // 'kcet_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
