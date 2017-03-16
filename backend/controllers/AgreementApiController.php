<?php

namespace backend\controllers;

use yii\rest\Controller;
use yii\filters\Cors;
use yii\web\Response;
use common\models\Agreement;
use yii\base\ViewContextInterface;
use Yii;

class AgreementApiController extends Controller implements ViewContextInterface
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

    public function actionGetDefault()
    {
        $agreement = Agreement::findOne(['program_id' => 0]);

        return $this->renderAjax('agreement_modal',
            [
                'agreement' =>$agreement
            ]);
    }

    public function actionGetNotApproved()
    {
        $id = Yii::$app->user->id;
        $notApprovedAgreements = Yii::$app->db->createCommand('SELECT agreement_id, approved FROM user_agreements
        WHERE user_id = :user_id AND approved = 0')
            ->bindValue(':user_id', $id)
            ->queryAll();

        $agreement = [];
        $response = [];
        //var_dump($notApprovedAgreements);
        //exit;

        if (!empty($notApprovedAgreements)) {

        foreach ($notApprovedAgreements as $notApprovedAgreement) {

            if ($notApprovedAgreement['approved'] == 0) {
                $response['agreement_id'] = $notApprovedAgreement['agreement_id'];
                $agreement[] = Agreement::findOne($notApprovedAgreement['agreement_id']);
                break;
            }

        }

        $response['agreement'] = $this->renderAjax('agreement_modal',
            [
                'agreement' =>$agreement[0]
            ]);

        return $response;

        } else {

            return false;
        }
    }

    public function actionSetApprove($agreement_id)
    {
        $id = Yii::$app->user->id;
        Yii::$app->db->createCommand()
            ->update('user_agreements', ['approved' => true], ['and', "user_id = $id", "agreement_id = $agreement_id"])
            ->execute();

    }

    public function getViewPath()
    {
        return '@frontend/views/site';
    }
}