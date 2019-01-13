<?php

class Div {

    private $class;
    private $contenido;
    private $id;
    private $color;

    public function Div($class = "", $id = "") {
        $this->class = $class;
        $this->contenido = "";
        $this->id = $id;
        $this->color = "danger";
    }

    public function alertWarning() {
        $this->color = "warning";
    }

    public function alertSuccess() {
        $this->color = "success";
    }

    public function btnGroup() {
        $this->class = "btn-group";
    }

    public function addContenido($contenido) {
        $this->contenido = $this->contenido .
                $contenido;
    }

    public function getDivAlert() {
        return
                "<div class='alert alert-$this->color $this->class' id='$this->id'>" .
                "$this->contenido" .
                "</div>";
    }

    public function printDivAlert() {
        echo $this->getDivAlert();
    }

    public function getDiv() {
        return
                "<div class='$this->class' id='$this->id'>" .
                "$this->contenido" .
                "</div>";
    }

    public function printDiv() {
        echo $this->getDiv();
    }

    public function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function setId($id) {
        $this->id = $id;
    }

}
