<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.denormalization.product_model_loader' shared service.

return $this->services['pim_connector.processor.denormalization.product_model_loader'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Processor\Denormalizer\ProductModelLoaderProcessor(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->getPimCatalog_Repository_ProductModelService()) && false ?: '_'});
