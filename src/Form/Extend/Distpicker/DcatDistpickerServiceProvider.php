<?php

namespace RuiYi\LaAdmin\Form\Extend\Distpicker;

use RuiYi\LaAdmin\Admin;
use Illuminate\Support\ServiceProvider;
use RuiYi\LaAdmin\Form;
use RuiYi\LaAdmin\Grid\Column;
use RuiYi\LaAdmin\Grid\Filter;
use RuiYi\LaAdmin\Form\Extend\Distpicker\Filter\DistpickerFilter;
use RuiYi\LaAdmin\Form\Extend\Distpicker\Form\Distpicker;
use RuiYi\LaAdmin\Form\Extend\Distpicker\Grid\Distpicker as GridDistpicker;

class DcatDistpickerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //加载插件
        Admin::booting(static function () {
            Column::extend('distpicker', GridDistpicker::class);
            Form::extend('distpicker', Distpicker::class);
            Filter::extend('distpicker', DistpickerFilter::class);
        });
    }
}
