<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.database.user_role' shared service.

return $this->services['pim_connector.writer.database.user_role'] = new \Akeneo\Tool\Component\Connector\Writer\Database\Writer(${($_ = isset($this->services['pim_user.saver.role']) ? $this->services['pim_user.saver.role'] : $this->load(__DIR__.'/getPimUser_Saver_RoleService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});
