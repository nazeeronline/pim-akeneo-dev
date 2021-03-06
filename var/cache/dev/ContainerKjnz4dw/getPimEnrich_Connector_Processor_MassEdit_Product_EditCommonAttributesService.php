<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.connector.processor.mass_edit.product.edit_common_attributes' shared service.

return $this->services['pim_enrich.connector.processor.mass_edit.product.edit_common_attributes'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Processor\MassEdit\EditCommonAttributesProcessor(${($_ = isset($this->services['pim_catalog.validator.product']) ? $this->services['pim_catalog.validator.product'] : $this->load(__DIR__.'/getPimCatalog_Validator_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->getPimCatalog_Repository_ProductService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.product']) ? $this->services['pim_catalog.updater.product'] : $this->load(__DIR__.'/getPimCatalog_Updater_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});
