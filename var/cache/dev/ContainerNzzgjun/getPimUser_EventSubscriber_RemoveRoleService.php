<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_user.event_subscriber.remove_role' shared service.

return $this->services['pim_user.event_subscriber.remove_role'] = new \Akeneo\UserManagement\Bundle\EventListener\RemoveRoleSubscriber(${($_ = isset($this->services['pim_user.query.is_there_user_without_role']) ? $this->services['pim_user.query.is_there_user_without_role'] : $this->load(__DIR__.'/getPimUser_Query_IsThereUserWithoutRoleService.php')) && false ?: '_'});
