<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function find(int $id): ?Model;

    public function findOrFail(int $id): mixed;

    public function all(): ?Collection;

    public function create(array $data): ?Model;

    public function update($id, array $data): mixed;

    public function delete($id): mixed;

    public function destroy(array $id): mixed;
}
