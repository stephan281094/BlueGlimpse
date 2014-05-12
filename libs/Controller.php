<?php

class Controller {

    function __construct() {
        //Session::init();
        $this->view = new View();
    }
    
    /**
     * @param type $name, load a model with this $name
     */
    function loadModel($name) {
        $path = 'models/' . $name . '_model.php';

        if (file_exists($path)) {
            require $path;

            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}
