<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.attribute_filter.product' shared service.

return $this->services['pim_connector.processor.attribute_filter.product'] = new \Akeneo\Pim\Enrichment\Component\Product\ProductModel\Filter\ProductAttributeFilter(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->getPimCatalog_Repository_ProductModelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_family']) ? $this->services['pim_catalog.repository.cached_family'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedFamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->getPimCatalog_Repository_ProductService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'});
