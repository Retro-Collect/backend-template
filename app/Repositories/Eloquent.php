<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class Eloquent implements RepositoryInterface
{
    public function find(int $id): ?Model
    {
        /** @phpstan-ignore-next-line  */
        return $this->model->find($id);
    }

    public function findOrFail(int $id): mixed
    {
        /** @phpstan-ignore-next-line  */
        return $this->model->findOrFail($id);
    }

    public function all(): ?Collection
    {
        /** @phpstan-ignore-next-line  */
        return $this->model->all();
    }

    public function create($data): ?Model
    {
        /** @phpstan-ignore-next-line  */
        return $this->model->create($data);
    }

    public function update($id, array $data): mixed
    {
        /** @phpstan-ignore-next-line  */
        return $this->model->findOrFail($id)->update($data);
    }

    public function destroy(array $id): int|Model
    {
        /** @phpstan-ignore-next-line  */
        return $this->model->destroy($id);
    }

    public function delete($id): mixed
    {
        /** @phpstan-ignore-next-line  */
        return $this->model->findOrFail($id)->delete();
    }
}
