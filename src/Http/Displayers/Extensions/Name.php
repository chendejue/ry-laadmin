<?php

namespace RuiYi\LaAdmin\Http\Displayers\Extensions;

use RuiYi\LaAdmin\Admin;
use RuiYi\LaAdmin\Grid\Displayers\AbstractDisplayer;
use RuiYi\LaAdmin\Http\Actions\Extensions\Disable;
use RuiYi\LaAdmin\Http\Actions\Extensions\Enable;
use RuiYi\LaAdmin\Http\Actions\Extensions\Uninstall;

class Name extends AbstractDisplayer
{
    public function display()
    {
        return Admin::view('admin::grid.displayer.extensions.name', [
            'value'           => $this->value,
            'row'             => $this->row,
            'enableAction'    => $this->resolveAction(Enable::class),
            'disableAction'   => $this->resolveAction(Disable::class),
            'uninstallAction' => $this->resolveAction(Uninstall::class),
            'linkIcon'        => 'icon-link',
        ]);
    }

    protected function resolveAction($action)
    {
        $action = new $action();

        $action->setGrid($this->grid);
        $action->setColumn($this->column);
        $action->setRow($this->row);

        return $action->render();
    }
}
