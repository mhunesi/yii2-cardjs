Yii2 Card JS Widget
================================
Yii2 Card JS Widget

Card JS https://github.com/jessepollak/card 

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist mhunesi/yii2-cardjs "*"
```

or add

```
"mhunesi/yii2-cardjs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<div class="row">
    <div class="col-md-6">
        <form class="card-form">
            <input type="text" name="number">
            <input name="name"/>
            <input name="expiry"/>
            <input name="cvc"/>
        </form>
    </div>

    <div class="col-md-6">
        <?= \mhunesi\cardjs\CardJs::widget([
            'clientOptions' => [
                'form' => '.card-form',
                'placeholders' => [
                    'number' => '**** **** **** ****',
                    'name' => 'Name Lastname',
                    'expiry' => '**/**',
                    'cvc' => '***'
                ],
                'formSelectors' => [
                    'numberInput' => 'input[name="number"]',
                    'expiryInput' => 'input[name="expiry"]', 
                    'cvcInput' => 'input[name="cvc"]', 
                    'nameInput' => 'input[name="name"]'
                ],
                'formatting' => true,
                'debug' => YII_ENV_DEV
            ]
        ]) ?>
    </div>
</div>
```