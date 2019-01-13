<?php

class Input {

    private $columnas;
    private $name;
    private $label;
    private $condicion;
    private $type;
    private $value;
    private $placeholder;
    private $id;
    private $small;
    private $aux;
    private $inputClass;
    private $min;

    public function Input($name, $label) {
        $this->columnas = 12;
        $this->name = $name;
        $this->label = $label;
        $this->condicion = "required";
        $this->type = "text";
        $this->value = "";
        $this->placeholder = "";
        $this->id = "";
        $this->small = "";
        $this->aux = "";
        $this->inputClass = "";
        $this->min = "";
    }

    public function hidden() {
        $this->label = "";
        $this->condicion = "hidden";
    }

    public function getInputHidden() {
        $this->condicion = "hidden";
        return
                "<input $this->condicion type='$this->type' min='$this->min' name='$this->name' value='$this->value' class='form-control' id='$this->id' placeholder='$this->placeholder' $this->aux>";
    }

    public function addInputClass($newClass) {
        $this->inputClass = $this->inputClass . " " . $newClass;
    }

    public function Disabled() {
        $this->condicion = "disabled";
    }

    ############################## COLUMNAS ##############################
    ######################################################################

    public function col1() {
        $this->columnas = 1;
    }

    public function col2() {
        $this->columnas = 2;
    }

    public function col3() {
        $this->columnas = 3;
    }

    public function col4() {
        $this->columnas = 4;
    }

    public function col5() {
        $this->columnas = 5;
    }

    public function col6() {
        $this->columnas = 6;
    }

    public function col7() {
        $this->columnas = 7;
    }

    public function col8() {
        $this->columnas = 8;
    }

    public function col9() {
        $this->columnas = 9;
    }

    ############################# INPUT TYPE #############################
    ######################################################################

    public function typeDate() {
        $this->type = "date";
    }

    public function typeNumber() {
        $this->type = "number";
    }

    public function typeColor() {
        $this->type = "color";
    }

    public function typePass() {
        $this->type = "password";
    }

    public function typeEmail() {
        $this->type = "email";
    }

    public function typeFile() {
        $this->type = "file";
    }

    public function typeWeek() {
        $this->type = "week";
    }

    ################################ SHOW ################################
    ######################################################################

    public function getInput() {
        return
                "<div class='form-group col-xs-12 col-xl-$this->columnas col-lg-$this->columnas col-md-$this->columnas col-sm-$this->columnas'>" .
                "<label for='$this->name'>$this->label</label>" .
                "<input $this->condicion type='$this->type' min='$this->min' name='$this->name' value='$this->value' class='form-control $this->inputClass' id='$this->id' placeholder='$this->placeholder' $this->aux>" .
                "<small class='form-text text-muted'>$this->small</small>" .
                "</div>";
    }

    public function getInputCheck() {
        $this->type = "checkbox";
        $this->condicion = "";
        return

                "<div class='form-group col-sm-12 col-xl-$this->columnas col-lg-$this->columnas col-md-$this->columnas col-sm-$this->columnas'>" .
                "<div class='form-check'>" .
                "<input $this->condicion type='$this->type' name='$this->name' value='$this->value' class='form-check-input $this->inputClass' id='$this->id' $this->aux>" .
                "<label class='form-check-label' for='$this->name'>$this->label</label>" .
                "</div>" .
                "</div>";
    }

    public function printInput() {
        echo $this->getInput();
    }

    public function printInputHidden() {
        echo $this->getInputHidden();
    }

    ############################### SETTER ###############################
    ######################################################################

    public function setSmall($small) {
        $this->small = $small;
    }

    public function setColumnas($columnas) {
        $this->columnas = $columnas;
    }

    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setMin($min) {
        $this->min = $min;
    }

}
