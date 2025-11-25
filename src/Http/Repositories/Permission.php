<?php

namespace RuiYi\LaAdmin\Http\Repositories;

use RuiYi\LaAdmin\Repositories\EloquentRepository;

class Permission extends EloquentRepository
{
    public function __construct()
    {
        $this->eloquentClass = config('admin.database.permissions_model');

        parent::__construct();
    }
}
