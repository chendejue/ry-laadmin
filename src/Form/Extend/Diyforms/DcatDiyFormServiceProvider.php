<?php

namespace RuiYi\LaAdmin\Form\Extend\Diyforms;

use RuiYi\LaAdmin\Admin;
use Illuminate\Support\ServiceProvider;
use RuiYi\LaAdmin\Form;
use RuiYi\LaAdmin\Show\Field;
use RuiYi\LaAdmin\Form\Extend\Diyforms\Form\DiyForm as FormDiyForm;
use RuiYi\LaAdmin\Form\Extend\Diyforms\Show\DiyForm as showDiyForm;

class DcatDiyFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //加载插件
        Admin::booting(static function () {
            Form::extend('diyForm', FormDiyForm::class);
            Field::extend('diyForm', showDiyForm::class);
        });

    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
