<?php

class IconCard {

    private $color;
    private $icon;
    private $label;
    private $href;

    public function IconCard($label, $href, $icon = "fa fa-list", $color = "danger") {
        $this->color = $color;
        $this->icon = $icon;
        $this->label = $label;
        $this->href = $href;
    }

    public function getIconCard() {
        return
                "<div class='col-xl-4 col-sm-6 mb-3'>" .
                "  <div class='card text-white bg-$this->color o-hidden h-100'>" .
                "    <div class='card-body'>" .
                "      <div class='card-body-icon'>" .
                "        <i class='$this->icon'></i>" .
                "      </div>" .
                "      <div class='mr-5'>$this->label</div>" .
                "    </div>" .
                "    <a class='card-footer text-white clearfix small z-1' href='$this->href'>" .
                "      <span class='float-left'>Ver Detalles</span>" .
                "      <span class='float-right'>" .
                "        <i class='fa fa-angle-right'></i>" .
                "      </span>" .
                "    </a>" .
                "  </div>" .
                "</div>";
    }

    public function printIconCard() {
        echo $this->getIconCard();
    }

}
