<?php

Class Form {

    private $action;
    private $method;
    private $contenido;
    private $enctype;

    public function Form($method = "POST") {
        $this->method = $method;
        $this->contenido = $contenido;
        $this->enctype = $enctype;
        $this->action = $action;
    }

    public function getForm() {
        return
                "<form $this->action method='$this->method' $this->enctype>" .
                "$this->contenido" .
                "</form>";
    }

    public function PrintForm() {
        echo $this->getForm();
    }

    public function addContenido($contenido) {
        $this->contenido = $this->contenido .
                $contenido;
    }

    public function setAction($action) {
        $this->action = "action='" . $action . "'";
    }

}

?>