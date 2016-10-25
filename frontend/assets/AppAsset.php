<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'bootstrap/dist/css/bootstrap.min.css',
        'font-awesome/css/font-awesome.min.css',
        'iCheck/skins/flat/green.css',
        'bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        'switchery/dist/switchery.min.css'
    ];
    public $js = [
        'jquery/dist/jquery.min.js',
        'jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
        'switchery/dist/switchery.min.js',
        'fastclick/lib/fastclick.js',
        'nprogress/nprogress.js',
        'dropzone/dist/min/dropzone.min.js',
        'Chart.js/dist/Chart.min.js',
        'Chart.js/dist/Chart.min.js',
        'gauge.js/dist/gauge.min.js',
        'bootstrap-progressbar/bootstrap-progressbar.min.js',
        'iCheck/icheck.min.js',
        'skycons/skycons.js',
        'Flot/jquery.flot.js',
        'Flot/jquery.flot.pie.js',
        'Flot/jquery.flot.time.js',
        'Flot/jquery.flot.stack.js',
        'Flot/jquery.flot.resize.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'frontend\assets\CustomAsset'
//        'yii\bootstrap\BootstrapAsset',
    ];
}
