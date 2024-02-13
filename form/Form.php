<?php

namespace Nirya\PhpMvcCore\\form;

use Nirya\PhpMvcCore\\form\Field;
use Nirya\PhpMvcCore\\Model;

class Form{
    public static function begin($url, $method){
        echo sprintf('<form action = "%s" method = "%s">', $url, $method);
        return new Form();
    }

    public static function end(){
        echo '</form>';
    }

    public static function field(Model $model, $attribute){
        return new InputField($model, $attribute);
    }
}