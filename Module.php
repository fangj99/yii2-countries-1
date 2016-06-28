<?php

/**
 * @link https://github.com/humanized/yii2-countries
 * @copyright Copyright (c) 2016 Humanized BV Comm V
 * @license https://github.com/humanized/yii2-countries/LICENSE
 */

namespace humanized\countries;

/**
 * Humanized countries for Yii2
 * 
 * 
 * 
 * 
 * @name Yii2 countries Module
 * @version 0.1
 * @author Robinson Coello <robinson@humanized.be>
 * @package yii2-countries
 * 
 */
class Module extends \yii\base\Module
{

    public function init()
    {
        if (\Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'humanized\countries\commands';
        }
        parent::init();
    }

}
