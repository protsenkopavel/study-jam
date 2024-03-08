<?php

namespace App\Controller\User;

use App\Entity\User;
use App\Service\User\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UpdateUser extends AbstractController
{
    public function __construct(
        private readonly UserService $userService
    ) {
    }
//$2y$10$HWFlV33mZ3fhxP8igOJqyequyzTpQgCahXhvuQQ9RnKaCgpcS/FWW
//$2y$10$iLj12unGWBFLrpTk3vJ75eIKYGGU6ICOovaz6kGELyALqAK.vZleW
    public function __invoke(User $user):User
    {
        return $this->userService->updatePass($user);
    }
}