<?php

namespace files\models;

use yii\db\ActiveRecord;

class File extends ActiveRecord
{
    public static function tableName()
    {
        return 'files';
    }
}