<?php

namespace RuiYi\LaAdmin\Http\Controllers;

class Dashboard
{
    public static function title()
    {
        return view('admin::dashboard.title');
    }

    public static function author()
    {
        return view('admin::dashboard.author');
    }
}
