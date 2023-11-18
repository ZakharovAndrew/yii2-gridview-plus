<?php

namespace ZakharovAndrew\grid\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * @link https://github.com/ZakharovAndrew/yii2-gridview-plus/
 *
 * @copyright Copyright (c) 2023 Zakharov Andrew
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
class GridViewPlusAssets extends AssetBundle
{
    public $sourcePath = __DIR__.'/backend';
    public $css = [
        'style.css',
    ];
    public $js = [
        // 
    ];
    public $depends = [
        JqueryAsset::class
    ];
}
