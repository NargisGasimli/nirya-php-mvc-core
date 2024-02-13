<?php

namespace Nirya\PhpMvcCore\;

use Nirya\PhpMvcCore\\middlewares\BaseMiddleWare;

Class Controller{
/**
 * @var \Nirya\PhpMvcCore\\middlewares\BaseMiddleWares[]
 */
    public array $middlewares = [];
    public $layout = 'main';
    public string $action = '';

    public function setLayout($layout){
        $this->layout = $layout;
    }

    public function render($view, $params = []){
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleWare(BaseMiddleWare $middleWare){
        $this->middlewares[] = $middleWare;
    }
}