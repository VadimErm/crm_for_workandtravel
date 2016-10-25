<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class NanoModalAsset extends AssetBundle
{
    public $sourcePath = '@bower/picoModal';
    public $js = [
        'src/picoModal.js'
    ];
}