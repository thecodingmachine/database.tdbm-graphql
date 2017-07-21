<?php


namespace Mouf\Tdbm\GraphQL;

use Mouf\Security\UserService\UserServiceInterface;
use TheCodingMachine\GraphQL\Controllers\Security\AuthenticationServiceInterface;

class AuthenticationService implements AuthenticationServiceInterface
{
    /**
     * @var UserServiceInterface
     */
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {

        $this->userService = $userService;
    }

    /**
     * Returns true if the "current" user is logged
     *
     * @return bool
     */
    public function isLogged(): bool
    {
        return $this->userService->isLogged();
    }
}