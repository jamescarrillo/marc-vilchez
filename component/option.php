<?php

class Option {

    private $label;
    private $value;
    private $selected;

    public function Option($label, $value) {
        $this->label = $label;
        $this->value = $value;
        $this->selected = "";
    }

    public function Selected() {
        $this->selected = "selected";
    }

    ################################ SHOW ################################
    ######################################################################

    public function getOption() {
        return
                "<option $this->selected value='$this->value'>$this->label</option>";
    }

    public function printOption() {
        echo $this->getOption();
    }

}
