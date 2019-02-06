<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.denormalization.group' shared service.

return $this->services['pim_connector.processor.denormalization.group'] = new \Akeneo\Tool\Component\Connector\Processor\Denormalization\Processor(${($_ = isset($this->services['pim_catalog.repository.group']) ? $this->services['pim_catalog.repository.group'] : $this->getPimCatalog_Repository_GroupService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.group']) ? $this->services['pim_catalog.factory.group'] : $this->load(__DIR__.'/getPimCatalog_Factory_GroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.group']) ? $this->services['pim_catalog.updater.group'] : $this->load(__DIR__.'/getPimCatalog_Updater_GroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});