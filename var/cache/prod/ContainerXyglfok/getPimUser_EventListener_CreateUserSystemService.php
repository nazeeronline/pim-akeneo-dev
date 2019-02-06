<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_user.event_listener.create_user_system' shared service.

return $this->services['pim_user.event_listener.create_user_system'] = new \Akeneo\UserManagement\Bundle\EventListener\CreateUserSystemListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['pim_user.repository.group']) ? $this->services['pim_user.repository.group'] : $this->load(__DIR__.'/getPimUser_Repository_GroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.repository.role']) ? $this->services['pim_user.repository.role'] : $this->load(__DIR__.'/getPimUser_Repository_RoleService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.factory.user']) ? $this->services['pim_user.factory.user'] : $this->load(__DIR__.'/getPimUser_Factory_UserService.php')) && false ?: '_'});