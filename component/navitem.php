<?php

class NavItem {

    private $label;
    private $href;
    private $icon;

    public function NavItem($label, $href, $icon = "fa fa-table") {
        $this->label = $label;
        $this->href = $href;
        $this->icon = $icon;
    }

    public function getNavItem() {
        return
                "<li class='nav-item' data-toggle='tooltip' data-placement='right' title='$this->label'>" .
                "  <a class='nav-link' href='$this->href'>" .
                "    <i class='$this->icon'></i>" .
                "    <span class='nav-link-text'>$this->label</span>" .
                "  </a>" .
                "</li>";
    }

    public function printNavItem() {
        echo $this->getNavItem();
    }

}
