<?php

namespace RuiYi\LaAdmin\Form\Extend\Sku;

use RuiYi\LaAdmin\Admin;
use RuiYi\LaAdmin\Extend\ServiceProvider;
use RuiYi\LaAdmin\Form;

class DcatSkuPlusServiceProvider extends ServiceProvider
{
    protected $js = [
        'js/index.js',
    ];
    protected $css = [
        'css/index.css',
    ];

    /*protected $menu = [
        [
            'title' => '属性管理',
            'uri' => 'sku-attribute'
        ]
    ];*/

    public function init()
    {
        parent::init();

        if ($views = $this->getViewPath()) {
            $this->loadViewsFrom($views, 'dcat-sku-plus');
        }

        Admin::booting(function () {
            Form::extend('sku', SkuField::class);
        });
    }

    public function settingForm(): Setting
    {
        return new Setting($this);
    }
}
