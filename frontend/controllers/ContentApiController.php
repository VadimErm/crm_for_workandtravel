<?php

namespace frontend\controllers;

use yii\rest\Controller;
use common\models\Content;
use yii\filters\Cors;
use yii\web\Response;


class ContentApiController extends Controller
{
    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => Cors::className(),
                'cors' => [
                    'Origin' => ['*'],
                ]
            ],
            [
                'class' => 'yii\filters\ContentNegotiator',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],

            ],

        ];
    }

    public function verbs()
    {
        return [
            'get' => ['GET'],
        ];

    }

    public function actionGet($slug) 
    {

        return Content::findOne(['slug' => $slug]);

    }




}
