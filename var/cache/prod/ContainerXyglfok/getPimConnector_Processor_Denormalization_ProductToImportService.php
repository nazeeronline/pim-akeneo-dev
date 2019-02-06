<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.denormalization.product_to_import' shared service.

return $this->services['pim_connector.processor.denormalization.product_to_import'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Processor\Denormalizer\FindProductToImport(${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.builder.product']) ? $this->services['pim_catalog.builder.product'] : $this->load(__DIR__.'/getPimCatalog_Builder_ProductService.php')) && false ?: '_'});