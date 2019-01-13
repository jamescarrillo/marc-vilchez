<?php

class Select {

    private $columnas;
    private $name;
    private $label;
    private $id;
    private $opciones;

    public function Select($name, $label) {
        $this->columnas = 12;
        $this->name = $name;
        $this->label = $label;
        $this->id = "";
        $this->opciones = "";
    }

    public function addOption(Option $option) {
        $this->opciones = $this->opciones .
                $option->getOption();
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

    ################################ SHOW ################################
    ######################################################################

    public function getSelect() {
        return
                "<div class='form-group col-xs-12 col-xl-$this->columnas col-lg-$this->columnas col-md-$this->columnas col-sm-$this->columnas'>" .
                "    <label for='$this->name'>$this->label</label>" .
                "    <select $this->id class='form-control' name='$this->name'>" .
                "$this->opciones" .
                "    </select>" .
                "</div>";
    }

    public function printSelect() {
        echo $this->getSelect();
    }

    ############################### SETTER ###############################
    ######################################################################

    public function setColumnas($columnas) {
        $this->columnas = $columnas;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

    public function setId($id) {
        $this->id = "id='" . $id . "'";
    }

    public function setOpciones($opciones) {
        $this->opciones = $opciones;
    }

}
