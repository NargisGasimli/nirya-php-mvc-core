<?php

namespace Nirya\PhpMvcCore\;

class Response{

    public function ResponseCode($code){
        http_response_code($code);
    }

    public function redirect ($url) {
        header('Location:'.$url);
    }

}