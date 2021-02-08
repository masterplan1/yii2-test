<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\rest\Controller;
/**
 * Description of TestController
 *
 * @author NickName
 */
class TestController extends Controller{
    public function actionIndex(){
        return ['username' => 'testing name'];
    }
}
