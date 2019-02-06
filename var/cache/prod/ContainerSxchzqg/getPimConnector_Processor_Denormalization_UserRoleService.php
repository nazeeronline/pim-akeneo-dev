<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.denormalization.user_role' shared service.

return $this->services['pim_connector.processor.denormalization.user_role'] = new \Akeneo\Tool\Component\Connector\Processor\Denormalization\Processor(${($_ = isset($this->services['pim_user.repository.role']) ? $this->services['pim_user.repository.role'] : $this->load(__DIR__.'/getPimUser_Repository_RoleService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.factory.role']) ? $this->services['pim_user.factory.role'] : $this->services['pim_user.factory.role'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\UserManagement\\Component\\Model\\Role')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.updater.role']) ? $this->services['pim_user.updater.role'] : $this->load(__DIR__.'/getPimUser_Updater_RoleService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load(__DIR__.'/getValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});