<?php

namespace RuiYi\LaAdmin\Http\Middleware;

use RuiYi\LaAdmin\Admin;

class Application
{
    public function handle($request, \Closure $next, $app = null)
    {
        if ($app) {
            Admin::app()->switch($app);
        }

        return $next($request);
    }
}
