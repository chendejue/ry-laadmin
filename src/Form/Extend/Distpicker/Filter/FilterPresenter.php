<?php

namespace RuiYi\LaAdmin\Form\Extend\Distpicker\Filter;

use RuiYi\LaAdmin\Grid\Filter\Presenter\Presenter;

class FilterPresenter extends Presenter
{
    public function view(): string
    {
        return 'admin::form.extend.distpicker.filter';
    }
}
