<?php

namespace RuiYi\LaAdmin\Form\Extend\Distpicker\Grid;

use RuiYi\LaAdmin\Grid\Displayers\AbstractDisplayer;
use RuiYi\LaAdmin\Form\Extend\Distpicker\DcatDistpickerHelper;

class Distpicker extends AbstractDisplayer
{
    public function display()
    {
        return DcatDistpickerHelper::getAreaName($this->value);
    }
}
