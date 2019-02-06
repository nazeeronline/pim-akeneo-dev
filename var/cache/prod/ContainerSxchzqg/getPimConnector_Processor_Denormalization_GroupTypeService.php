<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.denormalization.group_type' shared service.

return $this->services['pim_connector.processor.denormalization.group_type'] = new \Akeneo\Tool\Component\Connector\Processor\Denormalization\Processor(${($_ = isset($this->services['pim_catalog.repository.group_type']) ? $this->services['pim_catalog.repository.group_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_GroupTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.group_type']) ? $this->services['pim_catalog.factory.group_type'] : $this->services['pim_catalog.factory.group_type'] = new \Akeneo\Pim\Structure\Component\Factory\GroupTypeFactory('Akeneo\\Pim\\Structure\\Component\\Model\\GroupType')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.group_type']) ? $this->services['pim_catalog.updater.group_type'] : $this->services['pim_catalog.updater.group_type'] = new \Akeneo\Pim\Structure\Component\Updater\GroupTypeUpdater()) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load(__DIR__.'/getValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});
