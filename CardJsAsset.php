<?php

namespace mhunesi\cardjs;

use yii\web\AssetBundle;

/**
 * This is just an example.
 */
class CardJsAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/card/dist';

    /**
     * @var string[]
     */
    public $css = [
        'card.css',
    ];

    /**
     * @var string[]
     */
    public $js = [
        'card.js',
    ];
}
