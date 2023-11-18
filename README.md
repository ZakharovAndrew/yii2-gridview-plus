# Yii2 GridView Plus

[![Latest Stable Version](https://poser.pugx.org/zakharov-andrew/yii2-gridview-plus/v/stable)](https://packagist.org/packages/zakharov-andrew/yii2-gridview-plus)
[![License](https://poser.pugx.org/zakharov-andrew/yii2-settings/license)](https://packagist.org/packages/zakharov-andrew/yii2-gridview-plus)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

Enhanced GridView with various utilities for Yii Framework 2.0

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ composer require zakharov-andrew/yii2-gridview-plus
```

or add

```
"zakharov-andrew/yii2-gridview-plus": "*"
```

to the ```require``` section of your ```composer.json``` file.

## Usage

Add this to your action in the controller

```
class DefaultController extends Controller
{
    //...
    public function actionYourAction()
    {
        \ZakharovAndrew\grid\assets\GridViewPlusAsset::register($this->view);
        // ...
    }
}
```


## License

**yii2-gridview-plus** it is available under a BSD 3-Clause License. Detailed information can be found in the `LICENSE.md`.
