<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.normalization.attribute_group' shared service.

return $this->services['pim_connector.processor.normalization.attribute_group'] = new \Akeneo\Tool\Component\Connector\Processor\Normalization\Processor(${($_ = isset($this->services['pim_catalog.normalizer.standard.attribute_group']) ? $this->services['pim_catalog.normalizer.standard.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_AttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});