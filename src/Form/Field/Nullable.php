<?php

namespace RuiYi\LaAdmin\Form\Field;

use RuiYi\LaAdmin\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }

    public function render()
    {
    }
}
