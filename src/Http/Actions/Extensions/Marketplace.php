<?php

namespace RuiYi\LaAdmin\Http\Actions\Extensions;

use RuiYi\LaAdmin\Grid\Tools\AbstractTool;

class Marketplace extends AbstractTool
{
    protected $style = 'btn btn-primary';

    public function title()
    {
        return '<i class="feather icon-shopping-cart"></i> &nbsp;'.trans('admin.marketplace');
    }

    public function html()
    {
        return parent::html().'&nbsp;';
    }
}
