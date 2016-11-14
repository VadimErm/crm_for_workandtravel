<?php

namespace common\helpers;

use yii\base\Model;
use yii\base\Widget;

class ActiveFormHelper
{
    /**
     * @param Widget $form ActiveForm
     * @param Model $model
     * @param $field
     * @param string $fieldType
     */
    public static function textWithoutLabel(Widget $form,Model $model, $field , $params = [], $fieldType = 'textInput')
    {
        return $form->field($model, $field)
            ->$fieldType($params)
            ->label(false);
    }
}