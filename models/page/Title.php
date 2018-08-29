<?php

namespace app\models\page;

use app\models\page\DecoratorPage;

/*
 * @param InterfacePage $wrap
 */

class Title extends DecoratorPage {
    
    public $warp;
    public $text;  

    function Post() {
        $this->warp->Post();
        echo '<h1>' . $this->text . '</h1>';
        
    }

    function __construct(String $Text, InterfacePage $Page) {
        //parent::__construct($Page);
        $this->text=$Text;
        $this->warp=$Page;        
    }

}
