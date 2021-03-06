<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.validator.constraint.unique_value' shared service.

return $this->services['pim_catalog.validator.constraint.unique_value'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\Constraints\UniqueValueValidator(${($_ = isset($this->services['pim_catalog.repository.product_unique_data']) ? $this->services['pim_catalog.repository.product_unique_data'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductUniqueDataService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.validator.unique_value_set']) ? $this->services['pim_catalog.validator.unique_value_set'] : $this->services['pim_catalog.validator.unique_value_set'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\UniqueValuesSet()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'});
