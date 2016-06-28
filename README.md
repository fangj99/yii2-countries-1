# Yii2-Translation - README
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

Provides various interfaces to deal with routine tasks dealing with site countries management.


## Features

Yii2 Site Translation Module
 
Provides interfaces to deal with: 
 * Enable/disable languages using database storage (GUI,CLI)
 * Set default application language using database storage (GUI,CLI)

Provides various flexible language selection widgets:
 * Inline List
 * Bootstrap Dropdown Button
 * Bootstrap Dropdown List


## Dependencies

This package relies on Codemix Yii2 Locale Urls version 1.3.0. 

## Installation

### Install Using Composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require humanized/yii2-countries "*"
```

or add

```
"humanized/yii2-countries": "*"
```

to the ```require``` section of your `composer.json` file.


### Run Migrations 

```bash
$ php yii migrate/up --migrationPath=@vendor/humanized/yii2-countries/migrations
```


### Edit Configuration File

Add following lines to the configuration file:

```php
'modules' => [
    'countries' => [
        'class' => 'humanized\countries\Module',
    ],
],
```

Adding these lines allows access to the various interfaces provided by the module. 
Here, the chosen module-name is countries, as such the various routes will be available at countries/controller-id/action-id, though any module-name can be chosen.


This package contains an urlManager component which extends the urlManager component provided by the [Codemix Yii2-LocaleUrls](https://github.com/codemix/yii2-localeurls) package. Here setup of the default application language and population of the enabled website languages are handled automatically. Other configuration options are inherited between components. 

```php
'components' => [
..
        // Languages enabled populated through database storage
        // Further configuration options available at https://github.com/codemix/yii2-localeurls 
        'urlManager' => [
            'class' => 'humanized\countries\components\UrlManager',
            'enablePrettyUrl' => true, 
            'showScriptName' => false,
        ],
..
],
```
### Getting Started

Once configured, one or multiple languages should be enabled using the various interfaces provided by the module. To get up-and-running quickly, an example is given to enable some languages using the CLI provided by the package:

```bash
$ php yii countries/language/enable en
$ php yii countries/language/enable fr
$ php yii countries/language/enable nl
$ php yii countries/language/set-default en 
```

Above mentioned lines enables the English, French and Dutch language ands sets English as the default language

For full instructions on how to use the fully-configured module, check the [USAGE](USAGE.md)-file.
