Шаблон smarty boostrap
===================================

Информация
-------------------

Это просто нетронутый шаблон купленный тут https://wrapbootstrap.com/theme/smarty-website-admin-rtl-WB02DSN1B
И оформленный для работы с yii2 проектами

Установка
------------

1) Добавить в `composer.json` файл проекта.

```
"skeeks/yii2-template-smarty": "*"
```


Пример использования
------------

Решение оформлено для работы с yii2 проектами. Для использования в проекте создается собственный AssetBoundle который наследуется от родительского skeeks\template\smarty\SmartyAsset и набираются нужные файлы css и js.
Ну а html разметка за разработчиком.

```php

<?php
namespace frontend\assets;

use skeeks\template\smarty\SmartyAsset;

/**
 * Class SmartyThemeAsset
 * @package frontend\assets
 */
class SmartyThemeAsset extends SmartyAsset
{
    public $css = [
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700',
        'css/essentials.css',
        'css/layout.css',
        'css/header-1.css',
        'css/color_scheme/green.css',
    ];

    public $js = [
        //'js/scripts.js',
    ];
}


```

> [![skeeks!](https://gravatar.com/userimage/74431132/13d04d83218593564422770b616e5622.jpg)](http://www.skeeks.com)
<i>Быстро, просто, эффективно</i>
[cms.skeeks.com](http://cms.skeeks.com)
