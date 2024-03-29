<?php

namespace yiiframe\adminlte;

use yii\web\AssetBundle;

/**
 * Class HeadJsAsset
 * @package backend\assets
 * @author YiiFrame <21931118@qq.com>
 */
class HeadJsAsset extends AssetBundle
{
    public $js = [
        'bower_components/jquery/dist/jquery.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/cropper/cropper.min.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/resources';
        parent::init();
    }
}