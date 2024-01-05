<?php

namespace Controllers;
class Styles extends \App\Core\Controller
{
    public function getStyles(){
        $object = $this->model("Style");
        return $object->getStyles();
    }

}