<?php

use backend\assets\AgreementAsset;

AgreementAsset::register($this);

?>

<ul class="nav side-menu">
    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= Yii::$app->getHomeUrl() ?>">Resources</a></li>
        </ul>
    </li>
    <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['student/questionary']) ?>">Summary</a></li>
            <li><a href="<?= \yii\helpers\Url::to(['student/documents']) ?>">Documents</a></li>
        </ul>
    </li>
    <li>
        <a><i class="fa fa-tasks"></i> Tasks <span class="label label-success">2</span><span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li>
                <a href="<?= \yii\helpers\Url::to(['site/jobOffer']) ?>">
                    Sign Job-Offer <span class="label label-success">New</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to(['site/jobOffer']) ?>">
                    Complete orientation program <span class="label label-success">New</span>
                </a>
            </li>
            <li>
                <a href="<?= \yii\helpers\Url::to(['site/jobOffer']) ?>">
                    Some task <span class="label label-default">Done</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a><i class="fa fa-life-ring"></i> Help <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="<?= \yii\helpers\Url::to(['site/j222obOffer']) ?>">Get documents list</a></li>
        </ul>
    </li>
</ul>