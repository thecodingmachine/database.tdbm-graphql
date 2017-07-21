<?php


namespace Mouf\Tdbm\GraphQL;

use Mouf\Security\RightsService\RightsServiceInterface;
use Mouf\Security\UserService\UserServiceInterface;
use TheCodingMachine\GraphQL\Controllers\Security\AuthenticationServiceInterface;
use TheCodingMachine\GraphQL\Controllers\Security\AuthorizationServiceInterface;

class AuthorizationService implements AuthorizationServiceInterface
{
    /**
     * @var RightsServiceInterface
     */
    private $rightsService;

    public function __construct(RightsServiceInterface $rightsService)
    {
        $this->rightsService = $rightsService;
    }

    /**
     * Returns true if the "current" user has access to the right "$right"
     *
     * @param string $right
     * @return bool
     */
    public function isAllowed(string $right): bool
    {
        return $this->rightsService->isAllowed($right);
    }
}