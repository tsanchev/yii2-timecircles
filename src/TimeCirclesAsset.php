<?php

/*
 * Yii 2 asset for bower TimeCircles
 *
 * @link      https://github.com/tsanchev/yii2-timecircles
 * @package   yii2-asset-TimeCircles
 * @license   BSD-3-Clause
 */

namespace tsanchev\timecircles;

class TimeCirclesAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/timecircles/inc/';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'TimeCircles.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        'TimeCircles.css',
    ];
}
