<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.database.attribute' shared service.

return $this->services['pim_connector.writer.database.attribute'] = new \Akeneo\Tool\Component\Connector\Writer\Database\Writer(${($_ = isset($this->services['pim_catalog.saver.attribute']) ? $this->services['pim_catalog.saver.attribute'] : $this->load(__DIR__.'/getPimCatalog_Saver_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});