<?php

namespace app\models\page;

use app\models\page\DecoratorPage;

class Title extends DecoratorPage {

    private $warp;
    private $text;

    function Post() {
        $this->warp->Post();
        echo '<h1>' . $this->text . '</h1>';
    }

    function __construct(String $Text, InterfacePage $Page) {
        $this->text = $Text;
        $this->warp = $Page;
    }

}
