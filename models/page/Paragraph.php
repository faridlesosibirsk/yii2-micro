<?php

namespace app\models\page;

use app\models\page\DecoratorPage;

class Paragraph extends DecoratorPage {

    //private $warp;
    private $text;

    function Post() {
        //$this->warp->Post();
        echo '<p>' . $this->text . '</p>';
    }

    //function __construct(String $Text, InterfacePage $Page) {
    function __construct(String $Text) { 
        $this->text = $Text;
        //$this->warp = $Page;
    }

}
