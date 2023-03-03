<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
    ) {}

    /**
     * Get User by Id
     */
    public function findUserId(int $id): Response
    {
        $result = $this->userRepository->getUserById($id);

        return new Response($result);
    }
}
