<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_user.controller.user_role_rest' shared service.

return $this->services['pim_user.controller.user_role_rest'] = new \Akeneo\UserManagement\Bundle\Controller\Rest\UserRoleController(${($_ = isset($this->services['pim_user.repository.role']) ? $this->services['pim_user.repository.role'] : $this->load(__DIR__.'/getPimUser_Repository_RoleService.php')) && false ?: '_'}, ${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->getSerializerService()) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'});
