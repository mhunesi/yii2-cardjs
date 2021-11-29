<?php

namespace mhunesi\cardjs;

use mhunesi\entegra\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * This is just an example.
 */
class CardJs extends \yii\base\Widget
{
    public $options = [];

    public $clientOptions = [];

    public function run()
    {
        $asset = CardJsAsset::register($this->view);

        Html::addCssClass($this->options,"card-wrapper");

        $this->options['id'] = $this->id;

        $this->clientOptions = ArrayHelper::merge($this->clientOptions,[
            'container' => "#{$this->id}"
        ]);

        $jsonClientOptions = Json::encode($this->clientOptions);

        $this->view->registerJs("var card_{$this->id} = new Card({$jsonClientOptions})");

        return Html::tag('div','',$this->options);
    }
}
