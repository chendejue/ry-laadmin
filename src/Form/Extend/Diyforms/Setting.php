<?php

namespace RuiYi\LaAdmin\Form\Extend\Diyforms;

use RuiYi\LaAdmin\Extend\Setting as Form;

class Setting extends Form
{
    public function form()
    {
        $this->text('key1')->required();
        $this->text('key2')->required();
    }
}
