<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_user.provider.user' shared service.

return $this->services['pim_user.provider.user'] = new \Akeneo\UserManagement\Bundle\Security\UserProvider(${($_ = isset($this->services['pim_user.repository.user']) ? $this->services['pim_user.repository.user'] : $this->load(__DIR__.'/getPimUser_Repository_UserService.php')) && false ?: '_'});