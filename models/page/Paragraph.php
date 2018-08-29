<?php

namespace app\models\page;

use app\models\page\DecoratorPage;

class Paragraph extends DecoratorPage {
    
    public $warp;
    public $text; 

    function Post() {
        $this->warp->Post();
        echo '<p>' . $this->text . '</p>';
        
    }

    function __construct(String $Text, InterfacePage $Page) {
        //parent::__construct($Page);
        $this->text=$Text;
        $this->warp=$Page;  
    }

}
