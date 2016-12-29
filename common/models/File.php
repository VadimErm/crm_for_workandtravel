<?php

namespace common\models;

use Yii;
use yii\base\InvalidParamException;

/**
 * This is the model class for table "files".
 *
 * @property integer $id
 * @property string $path
 * @property integer $user_id
 * @property integer $type
 */
class File extends \yii\db\ActiveRecord
{
    private static $_types = [
        'photo_3_5x4_5' => 1,
        'photo_10x15' => 2,
        'passport' => 3,
        'identification' => 4,
        'enquiry' => 5,
        'enquiry_trans' => 6,
        'birth_certificate' => 7,
        'additional_docs' => 8,
        'ds_2019' => 9,
        'visa_j1' => 10,
        'air_tickets' => 11,
        'air_tickets_domestic' => 12,
        'isic' => 13,
        'bank_card' => 14,
        'payment_check' => 15

    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'type'], 'integer'],
            [['path'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'user_id' => 'User ID',
            'type' => 'Type',
        ];
    }

    public function setType($type)
    {
        if (isset(self::$_types[$type])) {
            $this->type = self::$_types[$type];
        } else {
            throw new InvalidParamException("Unknown file type");
        }
    }

    /**
     * @param $type string
     * @return string | boolean
     */
    public static function getType($type)
    {
        if (isset(self::$_types[$type])) {
            return self::$_types[$type];
        }
    }
}
