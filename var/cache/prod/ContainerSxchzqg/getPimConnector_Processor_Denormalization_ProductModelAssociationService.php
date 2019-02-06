<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.denormalization.product_model_association' shared service.

return $this->services['pim_connector.processor.denormalization.product_model_association'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Processor\Denormalizer\ProductModelAssociationProcessor(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.product_model']) ? $this->services['pim_catalog.updater.product_model'] : $this->load(__DIR__.'/getPimCatalog_Updater_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.validator.product']) ? $this->services['pim_catalog.validator.product'] : $this->load(__DIR__.'/getPimCatalog_Validator_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.comparator.filter.product_association']) ? $this->services['pim_catalog.comparator.filter.product_association'] : $this->load(__DIR__.'/getPimCatalog_Comparator_Filter_ProductAssociationService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});
