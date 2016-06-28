<?php

namespace humanized\countries\commands;

use humanized\maintenance\models\Maintenance;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EntryController extends \yii\console\Controller {

    /**
     * 
     * Yii2 Country Mode CLI
     * 
     * Usage: php yii <module-name> enable|disable|status'
     * 
     * @param string $cmd - enable|disable|status
     * @return int
     */
    public function actionIndex() {
        $this->stdout("Hello");
        $this->stdout("\n");
        return 0;
    }

}
