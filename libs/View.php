<?php

class View {

    function __construct() {
    }
    
    /**
     * Render a file with header and footer you want to show from views folder.
     * @param type $name, name of file to render in views folder
     * @param type $noInclude, if you don't want to include header and footer
     */
    function render($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
}
