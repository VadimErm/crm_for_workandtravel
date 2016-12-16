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
                    ]
                    ); 
                ?>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'fullname')->textInput(['disabled' =>'disabled'])->label(false); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер договора с КСЕТ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'kcet_number')->textInput(['disabled' =>'disabled'])->label(false); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата заключения договора</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'kcetdate')->textInput(['disabled' =>'disabled'])
                                ->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Другие Ф.И.О.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'another_fullname')->textInput(['disabled' =>'disabled'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">First name ( имя как в загранпаспорте)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'firstname_ipass')->textInput(['disabled' =>'disabled'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last name ( фамилия как в загранпаспорте)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'lastname_ipass')->textInput(['disabled' =>'disabled'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= $form->field($model, 'birthdate')
                                ->textInput(['disabled' =>'disabled'])
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
                                        <?= $form->field($model, 'birth_country')
                                            ->textInput(['disabled' =>'disabled'])
                                            ->label(false);
                                        ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Область</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <?= $form->field($model, 'birth_region')
                                            ->textInput(['disabled' =>'disabled'])
                                            ->label(false)
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Город</label>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <?= $form->field($model, 'birth_city')
                                            ->textInput(['disabled' =>'disabled'])
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
                            <?= $form->field($model, 'married')->widget(Select2::className(), [

                                'data' => [0 => 'не женат/не замужем', 1 => 'женат/замужем'],
                                'options' => ['placeholder' => 'Выберите семейное положение', 'disabled' =>'disabled'],
                                'hideSearch' => true

                            ])->label(false)?>
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Адрес</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">По прописке</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'addresses[0][address]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Реальный</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'addresses[1][address]', ['disabled' =>'disabled']) ?>
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
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'phones[0][number]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Мобильный</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'phones[1][number]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Другой</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'phones[2][number]', ['disabled' =>'disabled']) ?>
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
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'card[name]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Кем выдано</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'card[issued_by]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Когда выдано</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'card[issueddate]', ['disabled' =>'disabled']) ?>
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
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[number]', ['disabled' =>'disabled']) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Кем выдан</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_by]', ['disabled' =>'disabled']) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Период действия</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[expireddate]', ['disabled' =>'disabled']) ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Где выдан, страна</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_country]', ['disabled' =>'disabled']) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Область</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_region]', ['disabled' =>'disabled']) ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Город</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'ipassport[issued_city]', ['disabled' =>'disabled']) ?>
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
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][fullname]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дом. адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][addresses][address]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Домашний телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][phones][0][number]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Рабочий телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][phones][1][number]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Мобильный телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][phones][2][number]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения (д/м/г)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][birthdate]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О. мамы (даже если умерла или не живёт с вами)</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[1][fullname]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дом. адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[1][addresses][address]',  ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Домашний телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[1][phones][0][number]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Рабочий телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][phones][1][number]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Мобильный телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[0][phones][2][number]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения (д/м/г)</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'parents[1][birthdate]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="brothers-and-sisters">
                            <legend>Братья и сестры</legend>
                            <div class="form-group">
                                <?php for ($i = 0; $i < count($model->siblings); $i++) { ?>
                                   <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О</label>
                                   <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, "siblings[$i][fullname]", ['disabled' =>'disabled']) ?>
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
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[0][fullname]',['disabled' =>'disabled']) ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[0][addresses][address]', ['disabled' =>'disabled']) ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Городской телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[0][phones][0][number]', ['disabled' =>'disabled']) ?>
                                        </div>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сотовый телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[0][phones][1][number]', ['disabled' =>'disabled']) ?>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>2.</legend>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И.О</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[0][fullname]', ['disabled' =>'disabled']) ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[0][addresses][address]', ['disabled' =>'disabled']) ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Городской телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[1][phones][0][number]', ['disabled' =>'disabled']) ?>
                                        </div>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сотовый телефон</label>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'persons[1][phones][1][number]', ['disabled' =>'disabled']) ?>
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
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'departuredate', ['disabled' =>'disabled']) ?>
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Желаемая дата вылета в США</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'arrivaldate', ['disabled' =>'disabled']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Электронный адрес</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'email', ['disabled' =>'disabled']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Skype</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'skype', ['disabled' =>'disabled']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <legend>ВУЗ</legend>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Название</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[name]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[addresses][address]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Телефон</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[phones][0][number]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Факс</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[phones][1][number]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Курс</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[course]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Факультет</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[department]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Группа</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[group]',['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ф.И. декана/заместителя</label>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'university[dean_fullname]', ['disabled' =>'disabled']) ?>
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
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[number]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[addresses][address]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Годы обучения</legend>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">C</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[educ_start]', ['disabled' =>'disabled']) ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">По</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'school[educ_finish]', ['disabled' =>'disabled']) ?>
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
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[number]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[addresses][address]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                            <fieldset>
                                <legend>Годы обучения</legend>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">C</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[educ_start]', ['disabled' =>'disabled']) ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">По</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, 'college[educ_finish]', ['disabled' =>'disabled']) ?>
                                    </div>
                                </div>
                            </fieldset>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Поиск работы</label>
                        <?php if($model->work_search == 1) { ?>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input class="form-control" type="text" value="с помощью КСЕТ" disabled="disabled">
                                </div>
                        <?php } else { ?>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                самостоятельно
                                </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <fieldset id="experience">
                            <legend>Опыт работы</legend>
                            <?php for ($i = 0; $i < count($model->jobs); $i++) { ?>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Название компании</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][company_name]", ['disabled' =>'disabled']) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Должность</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][position]", ['disabled' =>'disabled']) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Период с (мм/гггг)</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][startworking]", ['disabled' =>'disabled']) ?>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Период по (мм/гггг)</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <?= ActiveFormHelper::textWithoutLabel($form, $model, "jobs[$i][finishworking]" , ['disabled' =>'disabled']) ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </fieldset>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Предпочитаемые вакансии (Кем бы хотели работать в США)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?=  ActiveFormHelper::textWithoutLabel($form, $model, 'preferred_job', ['disabled' =>'disabled']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Предпочитаемые штат</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'preferred_state', ['disabled' =>'disabled']) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <fieldset id="abroad-travels">
                            <legend>Предыдущие поездки за границу</legend>
                            <!-- TODO цыкл вывода-->
                            <div  class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Страна</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'abroadTravels[0][country]', ['disabled' =>'disabled']) ?>
                                </div>
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Тип визы</label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'abroadTravels[0][visa_type]', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                        </fieldset>
                            <div id="social-number" class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Social Security number</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <?= ActiveFormHelper::textWithoutLabel($form, $model, 'social_security_number', ['disabled' =>'disabled']) ?>
                                </div>
                            </div>
                        
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">С кем хотите поехать (ФИО)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?= ActiveFormHelper::textWithoutLabel($form, $model, 'travel_with_whom', ['disabled' =>'disabled']) ?>
                        </div>
                    </div>


                <?php \yii\widgets\ActiveForm::end(); ?>
      

            </div>
        </div>
    </div>
</div>
