<?php


namespace app\controllers;


use vendor\core\base\Controller;

class TodoController extends Controller
{

    public function indexAction()
    {
        $title = 'todo';
        $this->set(compact('title'));
    }
    
}