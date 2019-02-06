<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.validator.constraint.unique_product_entity' shared service.

return $this->services['pim_catalog.validator.constraint.unique_product_entity'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\Constraints\Product\UniqueProductEntityValidator(${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.validator.unique_value_set']) ? $this->services['pim_catalog.validator.unique_value_set'] : $this->services['pim_catalog.validator.unique_value_set'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\UniqueValuesSet()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'});
