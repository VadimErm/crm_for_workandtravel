<?php
/**
 * @var $this \yii\web\View
 */
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;


$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- Modal -->
<div class="modal fade status-change-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Change status</h4>
            </div>
            <div class="modal-body">
                <?php $form = ActiveForm::begin(['action' => 'change-status']); ?>
                <input type="hidden" id="contact" name="contact" value="">
                <?= $form->field(new \common\models\Contact(), 'status')->widget(Select2::className(), [

                    'data' => ["1" => 'Applicant', "2" => 'Participant'],
                    'options' => ['placeholder' => 'Choose status'],
                    'hideSearch' => true

                ])->label(false)?>

                <?php ActiveForm::end(); ?>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="w0">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Content -->
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
                                        'label' => 'Fullname'
                                    ],

                                    [
                                        'attribute' => 'program',
                                        'value' => 'user.program.title',
                                        'label' => "Program"
                                    ],
                                    [
                                        'attribute' => 'year',
                                        'value' => 'user.program.year',
                                        'label' => "Year of program"
                                    ],
                                    [
                                        'attribute' => 'status',
                                        'format' => 'raw',
                                        'label' => 'Status',
                                        'value' => function($model) {

                                                switch ($model->status) {
                                                    case 1:
                                                        return Html::tag('span', 'Applicant',['class' => "label label-default"] );
                                                        break;
                                                    case 2;
                                                        return Html::tag('span', 'Participant',['class' => "label label-success"] );
                                                        break;
                                                    case 3;
                                                        return Html::tag('span', 'Reject',['class' => "label label-danger"] );
                                                        break;

                                                }
                                            },
                                        'filter' => [null => 'All','1' => 'Applicant', '2' => 'Participant', '3' => 'Reject']
                                    ],
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['datetime', 'php:d-m-Y H:i:s'],
                                        'label' => "Created"

                                    ],

                                    [
                                        'attribute' => 'updated_at',
                                        'format' => ['datetime', 'php:d-m-Y H:i:s'],
                                        'label' => 'Updated'

                                    ],


                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'template' => '{view} {update} {documents} {payments}{status}',
                                        'buttons' =>
                                        [
                                            'view' => function ($url, $model, $key) {

                                                    $url = Url::to(['student/view-summary', 'user_id' => $model->user->id]);
                                                    return Html::a('<i class="fa fa-eye" aria-hidden="true" title="View"></i>', $url);
                                                },
                                            'update' => function ($url, $model, $key) {

                                                    $url = Url::to(['student/update-summary', 'user_id' => $model->user->id]);
                                                    return Html::a('<i class="fa fa-pencil" aria-hidden="true" title="Edit"></i>', $url);

                                                },
                                            'documents' => function ($url, $model, $key) {

                                                    $url = Url::to(['student/documents', 'user_id' => $model->user->id]);
                                                    return Html::a('<i class="fa fa-file-image-o" title="Upload documents" ></i>', $url);

                                                },
                                            'payments' => function ($url, $model, $key) {

                                                    $url = Url::to(['payment/view-by', 'kcet_number' => $model->user->contact->kcet_number]);
                                                    if($model->status == 2) {
                                                        return Html::a('<i class="fa fa-money" aria-hidden="true" title="Payments"></i>',  $url);
                                                    } else {
                                                        return null;
                                                    }
                                                },
                                            'status' => function($url, $model, $key) {

                                                    if($model->status !== 3){

                                                        return "<a href='#' class='change-status' data-toggle='modal' data-target='.status-change-modal' data-contact=".$model->user->contact->id."><i class='fa fa-refresh' aria-hidden='true' title='Изменить статус'></i></a>";
                                                    }

                                                }
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
