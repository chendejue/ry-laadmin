<?php

namespace RuiYi\LaAdmin\Http\Actions\Extensions;

use RuiYi\LaAdmin\Grid\Tools\AbstractTool;
use RuiYi\LaAdmin\Http\Forms\InstallFromLocal as InstallFromLocalForm;
use RuiYi\LaAdmin\Widgets\Modal;

class InstallFromLocal extends AbstractTool
{
    protected $style = 'btn btn-primary';

    public function html()
    {
        return Modal::make()
            ->lg()
            ->title($title = trans('admin.install_from_local'))
            ->body(InstallFromLocalForm::make())
            ->button("<button class='btn btn-primary'><i class=\"feather icon-folder\"></i> &nbsp;{$title}</button> &nbsp;");
    }
}
