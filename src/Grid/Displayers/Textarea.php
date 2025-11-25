<?php

namespace RuiYi\LaAdmin\Grid\Displayers;

class Textarea extends Editable
{
    protected $type = 'textarea';

    protected $view = 'admin::grid.displayer.editinline.textarea';

    public function defaultOptions()
    {
        return [
            'rows' => 5,
        ];
    }
}
