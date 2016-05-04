<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Fábio Lima
 */
class VendasAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'font-awesome/css/font-awesome.min.css',
        'css/custom.min.css',
    ];
    public $js = [
        'bootstrap/js/bootstrap.min.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
