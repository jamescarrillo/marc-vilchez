<?php

class Modal {

    private $idmodal;
    private $btnClass;
    private $titulo;
    private $btnShow;
    private $btnSave;
    private $contenido;
    private $modalLg;
    private $enctype;

    public function Modal($titulo, $btnShow, $btnSave, $idmodal = "id-modal") {
        $this->idmodal = $idmodal;
        $this->btnClass = "btn-primary";
        $this->titulo = $titulo;
        $this->btnShow = $btnShow;
        $this->btnSave = $btnSave;
        $this->contenido = "";
        $this->modalLg = "";
        $this->enctype = "";
    }

    public function enctypeON() {
        $this->enctype = "enctype='multipart/form-data'";
    }

    public function addContenido($contenido) {
        $this->contenido = $this->contenido .
                $contenido;
    }

    public function addInput(Input $input) {
        $this->contenido = $this->contenido .
                $input->getInput();
    }

    public function addInputHidden(Input $input) {
        $this->contenido = $this->contenido .
                $input->getInputHidden();
    }

    public function addInputCheck(Input $input) {
        $this->contenido = $this->contenido .
                $input->getInputCheck();
    }

    public function addSelect(Select $select) {
        $this->contenido = $this->contenido .
                $select->getSelect();
    }

    public function addDiv(Div $div) {
        $this->contenido = $this->contenido .
                $div->getDiv();
    }

    public function modalLg() {
        $this->modalLg = "modal-lg";
    }

    public function modalSm() {
        $this->modalLg = "modal-sm";
    }

    public function btnDanger() {
        $this->btnClass = "btn-danger";
    }

    public function btnWarning() {
        $this->btnClass = "btn-warning";
    }

    public function btnSuccess() {
        $this->btnClass = "btn-success";
    }

    public function getModal() {
        return
                "<!-- Button trigger modal -->" .
                "<button type='button' class='btn $this->btnClass' data-toggle='modal' data-target='#$this->idmodal'>" .
                "$this->btnShow" .
                "</button>" .
                "<!-- Modal -->" .
                "<div class='modal fade' id='$this->idmodal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>" .
                "  <div class='modal-dialog modal-dialog-centered $this->modalLg' role='document'>" .
                "    <div class='modal-content'>" .
                "      <div class='modal-header'>" .
                "        <h5 class='modal-title' id=LongTitle$this->idmodal'>$this->titulo</h5>" .
                "        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>" .
                "          <span aria-hidden='true'>&times;</span>" .
                "        </button>" .
                "      </div>" .
                "      <form method='POST' $this->enctype>" .
                "      <div class='modal-body'>" .
                "      <div class='row'>" .
                "        $this->contenido" .
                "      </div>" .
                "      </div>" .
                "      <div class='modal-footer'>" .
                "        <button type='button' class='btn btn-secondary' data-dismiss='modal'>CERRAR</button>" .
                "        <button type='submit' class='btn $this->btnClass'> $this->btnSave</button>" .
                "      </div>" .
                "      </form>" .
                "    </div>" .
                "  </div>" .
                "</div>";
    }

    public function getModalNoSubmit() {
        return
                "<!-- Button trigger modal -->" .
                "<button type='button' class='btn $this->btnClass' data-toggle='modal' data-target='#$this->idmodal'>" .
                "$this->btnShow" .
                "</button>" .
                "<!-- Modal -->" .
                "<div class='modal fade' id='$this->idmodal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>" .
                "  <div class='modal-dialog modal-dialog-centered $this->modalLg' role='document'>" .
                "    <div class='modal-content'>" .
                "      <div class='modal-header'>" .
                "        <h5 class='modal-title' id=LongTitle$this->idmodal'>$this->titulo</h5>" .
                "        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>" .
                "          <span aria-hidden='true'>&times;</span>" .
                "        </button>" .
                "      </div>" .
                "      <form method='POST'>" .
                "      <div class='modal-body'>" .
                "      <div class='row'>" .
                "        $this->contenido" .
                "      </div>" .
                "      </div>" .
                "      <div class='modal-footer'>" .
                "        <button type='button' class='btn btn-secondary' data-dismiss='modal'>CERRAR</button>" .
                "      </div>" .
                "      </form>" .
                "    </div>" .
                "  </div>" .
                "</div>";
    }

    public function printModal() {
        echo $this->getModal();
    }

    public function setIdmodal($idmodal) {
        $this->idmodal = $idmodal;
    }

}
