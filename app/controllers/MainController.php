<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController{
    
//    public $layout = 'main';
    
    public function indexAction(){
        $title = 'PAGE TITLE';
        $this->set(compact('title'));
    }
    
}
