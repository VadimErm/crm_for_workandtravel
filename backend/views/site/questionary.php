<?php

use common\helpers\ActiveFormHelper;
use yii\helpers\Html;
use backend\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap\Alert;
use yii\helpers\Url;

?>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Анкета</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <?php $form = \yii\widgets\ActiveForm::begin(
                    [ 
                        'options' => [
                            'class' => 'form-horizontal form-label-left input_mask'
                        ],
                        'fieldConfig' => [
                            'options' => [
                                'tag' => false
                            ],
                        ]
                    ]
                    ); 
                ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'fullname')->textInput()->label(false); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер договора с КСЕТ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'kcet_number')->textInput()->label(false); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата заключения договора</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'kcet_date')->textInput()->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Другие Ф.И.О.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'another_fullname')->textInput()->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">First name ( имя как в загранпаспорте)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'first_name')->textInput()->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last name ( фамилия как в загранпаспорте)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'last_name')->textInput()->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'birthday')
                                ->textInput(['data-inputmask' => "'mask': '99/99/9999'"])
                                ->label(false)
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Место рождения</legend>
                            <div class="control-group">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Страна</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <?= $form->field($model, 'country')
                                            ->textInput()
                                            ->label(false);
                                        ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Область</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <?= $form->field($model, 'region')
                                            ->textInput()
                                            ->label(false)
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Город</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <?= $form->field($model, 'city')
                                            ->textInput()
                                            ->label(false)
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Семейное положение</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'marital_status') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Адрес</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">По прописке</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'passport_address') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Реальный</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'real_address') ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Телефоны (с кодом города)</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Домашний</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'home_phone', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Мобильный</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'mobile_phone', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Другой</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'another_phone', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Удостоверение</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Номер</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'passport_number') ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Кем выдано</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'issued_by') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Когда выдано</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'issued_date', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Заграничный паспорт</legend>
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'inter_passport_number') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Кем выдан</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'inter_issued_by') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Период действия</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'inter_exp') ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Где выдан, страна</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'inter_issued_country') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Область</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'inter_issued_region') ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Город</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'inter_issued_city') ?>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>Родители</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О. папы (даже если умер или не живёт с вами)</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'father_fullname') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дом. адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'father_home_address') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Домашний телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'father_home_phone', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Рабочий телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'father_work_phone', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения (д/м/г)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'father_birthday', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О. мамы (даже если умерла или не живёт с вами)</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'mother_fullname') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дом. адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'mother_home_address') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Домашний телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'mother_home_phone', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Рабочий телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'mother_home_phone', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения (д/м/г)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'mother_birthday', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="brothers-and-sisters">
                            <legend>Братья и сестры</legend>
                            <button id="add-relatives" type="button" class="btn btn-round btn-success">+</button>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'bro_and_sis_fullname[]') ?>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>Укажите два контактных лица (не родственники и не те, кто едут с вами) </legend>
                            <div class="form-group">
                                <fieldset>
                                    <legend>1.</legend>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_fullname[]') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_address[]') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Городской телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_city_phone[]') ?>
                                        </div>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сотовый телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_mobile_phone[]') ?>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>2.</legend>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_fullname[]') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_address[]') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Городской телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_city_phone[]') ?>
                                        </div>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сотовый телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'contact_mobile_phone[]') ?>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Желаемая дата вылета из/в США</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Электронный адрес</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Skype</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>ВУЗ</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Название</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Факс</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Курс</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Факультет</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Группа</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И. декана
                                    <input type="checkbox" class="js-switch" data-switchery="true"> заместителя</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>Средняя школа</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <fieldset>
                                <legend>Годы обучения</legend>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">C</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">По</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>Коледж</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <fieldset>
                                <legend>Годы обучения</legend>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">C</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control">
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">По</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Поиск работы</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            с помощью КСЕТ<input type="checkbox" class="js-switch" data-switchery="true">самостоятельно
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset id="experience">
                            <legend>Опыт работы</legend>
                            <button id="add-experience" type="button" class="btn btn-round btn-success">+</button>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Название компании</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Должность</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Период с (мм/гггг)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Период по (мм/гггг)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Предпочитаемые вакансии (Кем бы хотели работать в США)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Предпочитаемые штат</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>Предыдущие поездки за границу</legend>
                            <button id="add-travel" type="button" class="btn btn-round btn-success">+</button>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Страна</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Тип визы</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div id="social-number" class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Social Security number</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">С кем хотите поехать (ФИО)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                    </div>

                <?php \yii\widgets\ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>