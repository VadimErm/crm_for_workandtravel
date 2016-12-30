<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 30.12.16
 * Time: 15:00
 */

namespace common\helpers;


use yii\helpers\Html;

class DetailViewStatusValueHelper {

    public static function getValue($status){

        switch($status){
            case 1:
                return Html::tag('span', 'Оплачен',['class' => "label label-success"] );
                break;
            case 2:
                return Html::tag('span', 'Удален',['class' => "label label-default"] );
                break;
            case 3:
                return Html::tag('span', 'Ошибочный',['class' => "label label-danger"] );
                break;
        }
    }

} 