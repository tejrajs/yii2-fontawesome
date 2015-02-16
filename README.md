Hello World
===========
Just A Font-awesome Yii2 Widget  

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tejrajs/yii2-fontawesome "*"
```

or add

```
"tejrajs/yii2-fontawesome": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php 
<?php
use tejrajs\fontawesome\FontAwesome;
?>
<?= FontAwesome::widget(['icon' => 'edit']) ?>
```