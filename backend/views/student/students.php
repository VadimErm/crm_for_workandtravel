<?php
/**
 * @var $this \yii\web\View
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$this->title = 'Applicants';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><?= Html::encode($this->title) ?></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Добавить</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Экспорт в Excel (По ВУЗу)</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Экспорт в Excel (Посольство)</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Оповестить всех</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p class="text-muted font-13 m-b-30">

                </p>
                <div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <?= GridView::widget([
                                'options' => ['id' => 'w1', 'class' => 'grid-view'],
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    [
                                        'attribute' => 'fullname',
                                        'label' => 'ФИО'
                                    ],

                                    [
                                        'attribute' => 'program',
                                        'value' => 'user.program.title',
                                        'label' => "Программа"
                                    ],
                                    [
                                        'attribute' => 'year',
                                        'value' => 'user.program.year',
                                        'label' => "Год программы"
                                    ],
                                    [
                                        'attribute' => 'status',
                                        'label' => 'Статус'
                                    ],
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['datetime', 'php:Y-m-d H:i:s'],
                                        'label' => "Создан"

                                    ],

                                    [
                                        'attribute' => 'updated_at',
                                        'format' => ['datetime', 'php:Y-m-d H:i:s'],
                                        'label' => 'Последние обновление'

                                    ],


                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => '{view} {update} {documents}',
                                        'buttons' =>
                                        [
                                            'view' => function ($url, $model, $key) {

                                                    $url = Url::to(['site/view-summary', 'user_id' => $model->user->id]);
                                                    return Html::a('<i class="fa fa-eye" aria-hidden="true" title="Просмотр"></i>', $url);
                                                },
                                            'update' => function ($url, $model, $key) {

                                                    $url = Url::to(['site/update-summary', 'user_id' => $model->user->id]);
                                                    return Html::a('<i class="fa fa-pencil" aria-hidden="true" title="Редактировать"></i>', $url);

                                                },
                                            'documents' => function ($url, $model, $key) {

                                                    $url = Url::to(['site/documents', 'user_id' => $model->user->id]);
                                                    return Html::a('<i class="fa fa-file-image-o" title="Загрузить документы" ></i>', $url);

                                                },
                                        ]
                                    ],
                                ],
                            ]); ?>


                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>