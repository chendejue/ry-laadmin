<?php

namespace RuiYi\LaAdmin\Http\Repositories;

use RuiYi\LaAdmin\Repositories\EloquentRepository;

class Role extends EloquentRepository
{
    public function __construct($relations = [])
    {
        $this->eloquentClass = config('admin.database.roles_model');

        parent::__construct($relations);
    }
}
