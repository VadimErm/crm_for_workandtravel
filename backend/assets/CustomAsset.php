<?php

namespace backend\assets;

use yii\helpers\Url;
use yii\web\AssetBundle;

class CustomAsset extends AssetBundle
{
    public $baseUrl = '@web';
    public $css = [
        'css/maps/jquery-jvectormap-2.0.3.css',
        'css/custom.min.css',
        'css/dropzone.css',
        'css/site.css'
    ];
    public $js = [
        'js/flot/jquery.flot.orderBars.js',
        'js/flot/date.js',
        'js/flot/jquery.flot.spline.js',
        'js/flot/curvedLines.js',
        'js/maps/jquery-jvectormap-2.0.3.min.js',
        'js/moment/moment.min.js',
        'js/datepicker/daterangepicker.js',
        'js/custom.min.js',
        'js/maps/jquery-jvectormap-world-mill-en.js',
        'js/maps/jquery-jvectormap-us-aea-en.js',
        'js/maps/gdp-data.js',

        //'js/dropzone.js',
        'js/yii.activeForm.js',
        'js/stan.custom.js',
        'js/masonry.js',
        'js/task.js'


      //'js/dataTables.js'
    ];

     public $depends = [
        'yii\web\YiiAsset',
         AppAsset::class,
    ];

    public function init()
    {
        if (Url::current() == AppAsset::STUDENT_INDEX) {
            $this->js[] = 'js/dataTables.js';
        }

    }
}