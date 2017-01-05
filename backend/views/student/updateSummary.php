<?php

use common\helpers\ActiveFormHelper;
use yii\helpers\Html;
use backend\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\bootstrap\Alert;
use yii\helpers\Url;
use yii\helpers\Json;
use kartik\select2\Select2;


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
                    ]);
                ?>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О.<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'fullname')->textInput()->label(false); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер договора с КСЕТ<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'kcet_number')->textInput(['disabled' =>'disabled'])->label(false); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата заключения договора<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'kcet_date')->textInput(['disabled' =>'disabled','data-inputmask' => "'mask': '99/99/9999'"])
                            ->label(false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Другие Ф.И.О.</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'another_fullname')->textInput()->label(false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">First name ( имя как в загранпаспорте)<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'firstname_ipass')->textInput()->label(false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Last name ( фамилия как в загранпаспорте)<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'lastname_ipass')->textInput()->label(false) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'birth_date')
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Страна<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= $form->field($model, 'birth_country')
                                        ->textInput()
                                        ->label(false);
                                    ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Область<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= $form->field($model, 'birth_region')
                                        ->textInput()
                                        ->label(false)
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Город<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= $form->field($model, 'birth_city')
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
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Семейное положение<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= $form->field($model, 'married')->widget(Select2::className(), [

                                'data' => [0 => 'не женат/не замужем', 1 => 'женат/замужем'],
                                'options' => ['placeholder' => 'Выберите семейное положение'],
                                'hideSearch' => true

                            ])->label(false)?>
                    </div>
                </div>
                <div class="form-group">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Адрес</legend>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">По прописке<span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'addresses[passport_address]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Реальный<span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'addresses[real_address]') ?>
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
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'phones[home]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Мобильный<span class="required">*</span></label>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'phones[mobile]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Другой</label>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'phones[other]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
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
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'card[name]') ?>
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Кем выдано</label>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'card[issued_by]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Когда выдано</label>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'card[issued_date]', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Заграничный паспорт</legend>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер<span class="required">*</span></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[number]') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Кем выдан<span class="required">*</span></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_by]') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Период действия<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[expired_date]', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Где выдан, страна<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_country]') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Область<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_region]') ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Город<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_city]') ?>
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
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[father][fullname]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дом. адрес</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[father][addresses][home]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Домашний телефон</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[father][phones][home]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Рабочий телефон</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[father][phones][work]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Мобильный телефон</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[father][phones][mobile]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения (д/м/г)</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[father][birth]', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О. мамы (даже если умерла или не живёт с вами)</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[mother][fullname]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дом. адрес</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[mother][addresses][home]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Домашний телефон</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[mother][phones][home]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Рабочий телефон</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[mother][phones][work]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Мобильный телефон</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[mother][phones][mobile]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения (д/м/г)</label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[mother][birth]', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id="brothers-and-sisters">
                        <legend>Братья и сестры</legend>

                        <div class="form-group">
                            <?php for ($i = 0; $i < count($model->siblings); $i++) { ?>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, "siblings[$i][fullname]") ?>
                                </div>
                            <?php } ?>
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
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[first][fullname]') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[first][addresses][home]') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Городской телефон</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[first][phones][city]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Сотовый телефон<span class="required">*</span></label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[first][phones][mobile]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>2.</legend>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[second][fullname]') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес<span class="required">*</span></label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[second][addresses][home]') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Городской телефон</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[second][phones][city]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Сотовый телефон<span class="required">*</span></label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[second][phones][mobile]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </fieldset>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Желаемая дата вылета из США</label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'departure_date', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                    </div>
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Желаемая дата вылета в США</label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'arrival_date', ['data-inputmask' => "'mask' : '99/99/9999'"]) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Электронный адрес<span class="required">*</span></label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'email') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Skype<span class="required">*</span></label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'skype') ?>
                    </div>
                </div>
                <div class="form-group">
                    <fieldset>
                        <legend>ВУЗ</legend>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Название<span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[name]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес<span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[addresses][official]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Телефон<span class="required">*</span></label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[phones][work]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Факс<span class="required">*</span></label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[phones][fax]', ['data-inputmask' => "'mask' : '(999) 999-9999'"]) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Курс<span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[course]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Факультет<span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[department]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Группа<span class="required">*</span></label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[group]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И. декана<span class="required">*</span>
                            <?php if ($model->university['depdean'] == 0) { ?>
                                <input type="checkbox" name="Summary[university][depdean]" class="js-switch" data-switchery="true">

                            <?php } else { ?>
                                <input type="checkbox" name="Summary[university][depdean]" class="js-switch" data-switchery="true" checked>

                            <?php } ?>заместителя</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, "university[dean_fullname]") ?>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group">
                    <fieldset>
                        <legend>Средняя школа</legend>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер<span class="required">*</span></label>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[number]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес<span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[addresses][official]') ?>
                            </div>
                        </div>
                        <fieldset>
                            <legend>Годы обучения</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">C<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[educ_start]') ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">По<span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[educ_finish]') ?>
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
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[number]') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[addresses][official]') ?>
                            </div>
                        </div>
                        <fieldset>
                            <legend>Годы обучения</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">C</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[educ_start]') ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">По</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[educ_finish]') ?>
                                </div>
                            </div>
                        </fieldset>
                    </fieldset>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Поиск работы<span class="required">*</span></label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            с помощью КСЕТ
                            <?php if($model->work_search == 1) { ?>
                                <input type="checkbox" name="Summary[work_search]" class="js-switch" data-switchery="true">
                            <?php } else { ?>
                                <input type="checkbox" name="Summary[work_search]" class="js-switch" data-switchery="true" checked>
                            <?php } ?>

                            самостоятельно

                        </div>

                </div>
                <div class="form-group">
                    <fieldset id="experience">
                        <legend>Опыт работы</legend>

                        <?php for ($i = 0; $i < count($model->jobs); $i++) { ?>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Название компании</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][company_name]") ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Должность</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][position]") ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Период с (мм/гггг)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][start_working]", ['data-inputmask' => "'mask' : '99/9999'"]) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Период по (мм/гггг)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][finish_working]", ['data-inputmask' => "'mask' : '99/9999'"]) ?>
                                </div>
                            </div>
                        <?php } ?>
                    </fieldset>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Предпочитаемые вакансии (Кем бы хотели работать в США)<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?=  ActiveFormHelper::textWithoutLabel($form, $model, 'preferred_job') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Предпочитаемые штат<span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'preferred_state') ?>
                    </div>
                </div>
                <div class="form-group">
                    <fieldset id="abroad-travels">
                        <legend>Предыдущие поездки за границу</legend>

                        <?php for ($i = 0; $i < count($model->abroad_travels); $i++) { ?>
                            <div  class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Страна</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, "abroad_travels[$i][country]") ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Тип визы</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, "abroad_travels[$i][visa_type]") ?>
                                </div>
                            </div>
                        <?php } ?>
                    </fieldset>
                    <div id="social-number" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Social Security number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'social_security_number', ['data-inputmask' => "'mask' : '999-99-9999'"]) ?>
                        </div>
                    </div>

                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">С кем хотите поехать (ФИО)</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'travel_with_whom') ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Обновить', ['class' => 'btn btn-success']) ?>
                </div>

                <?php \yii\widgets\ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
