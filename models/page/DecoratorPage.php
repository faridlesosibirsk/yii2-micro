<?php

namespace app\models\page;

use app\models\page\InterfacePage;

abstract class DecoratorPage implements InterfacePage {

    abstract function Post();

    //abstract function __construct(String $Text, InterfacePage $Page);
}
