<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.comparator.filter.product' shared service.

return $this->services['pim_catalog.comparator.filter.product'] = new \Akeneo\Pim\Enrichment\Component\Product\Comparator\Filter\EntityWithValuesFilter(${($_ = isset($this->services['pim_catalog.normalizer.standard.product.properties']) ? $this->services['pim_catalog.normalizer.standard.product.properties'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_Product_PropertiesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.comparator.registry']) ? $this->services['pim_catalog.comparator.registry'] : $this->load(__DIR__.'/getPimCatalog_Comparator_RegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.comparator.filter.product_field']) ? $this->services['pim_catalog.comparator.filter.product_field'] : $this->load(__DIR__.'/getPimCatalog_Comparator_Filter_ProductFieldService.php')) && false ?: '_'}, array(0 => 'family', 1 => 'enabled', 2 => 'groups', 3 => 'categories', 4 => 'parent'));
