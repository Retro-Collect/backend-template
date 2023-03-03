<?php

declare(strict_types=1);

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\Eloquent;

class UserRepository extends Eloquent implements UserRepositoryInterface
{
    public function __construct(
        protected User $model,
    ) {}

    public function getUserById(int $id): User
    {
        return $this->model->findOrFail($id)->first();
    }
}
