<?php

namespace RuiYi\LaAdmin\Http\Actions\Extensions;

use RuiYi\LaAdmin\Admin;
use RuiYi\LaAdmin\Grid\RowAction;

class Update extends RowAction
{
    public function title()
    {
        $replace = ['version' => $this->row->extension->getLocalLatestVersion()];

        return sprintf('<b>%s</b>', trans('admin.upgrade_to_version', $replace));
    }

    public function handle()
    {
        $manager = Admin::extension()
            ->updateManager()
            ->update($this->getKey());

        return $this
            ->response()
            ->success(implode('<br>', $manager->notes))
            ->refresh();
    }
}
