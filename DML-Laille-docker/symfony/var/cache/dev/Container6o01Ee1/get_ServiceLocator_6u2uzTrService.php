<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.6u2uzTr' shared service.

return $this->privates['.service_locator.6u2uzTr'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('da' => function (): \App\Entity\DanseApprise {
    return ($this->privates['.errored..service_locator.6u2uzTr.App\Entity\DanseApprise'] ?? $this->load('getDanseAppriseService.php'));
}, 'repo' => function (): \App\Repository\DanseAppriseRepository {
    return ($this->privates['App\Repository\DanseAppriseRepository'] ?? $this->load('getDanseAppriseRepositoryService.php'));
}));