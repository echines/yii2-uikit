<?php

namespace worstinme\uikit;

use yii\web\AssetBundle;


class Asset extends AssetBundle
{
    public $sourcePath = '@bower/uikit/dist';

    public $css = [
        'css/uikit.min.css',
    ];

    public $js = [
        'js/uikit.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

}