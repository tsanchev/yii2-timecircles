<?php

/*
 * Yii 2 asset for bower LightBox2
 *
 * @link      https://github.com/tsanchev/yii2-lightbox2
 * @package   yii2-asset-lightbox2
 * @license   BSD-3-Clause
 */

namespace tsanchev\timecircles;

class TimeCirclesAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/timecircles/src/';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/TimeCircles.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/TimeCircles.css',
    ];
}
