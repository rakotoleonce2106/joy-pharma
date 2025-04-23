<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;

class CurrentUserProvider implements ProviderInterface
{
    public function __construct(
        private Security $security
    )
    {
    }

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): ?User
    {
        $user = $this->security->getUser();

        if (!$user instanceof User) {
            throw new \LogicException('User not authenticated or not a valid User entity.');
        }

        return $user;
    }
}
