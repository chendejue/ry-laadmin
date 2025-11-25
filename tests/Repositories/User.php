<?php

namespace Tests\Repositories;

use RuiYi\LaAdmin\Repositories\EloquentRepository;
use Tests\Models\User as Model;

class User extends EloquentRepository
{
    protected $eloquentClass = Model::class;
}
