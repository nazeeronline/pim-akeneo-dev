<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.remover.multiselect_value' shared service.

return $this->services['pim_catalog.updater.remover.multiselect_value'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Remover\MultiSelectAttributeRemover(${($_ = isset($this->services['pim_catalog.validator.helper.attribute']) ? $this->services['pim_catalog.validator.helper.attribute'] : $this->getPimCatalog_Validator_Helper_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.builder.entity_with_values']) ? $this->services['pim_catalog.builder.entity_with_values'] : $this->load(__DIR__.'/getPimCatalog_Builder_EntityWithValuesService.php')) && false ?: '_'}, array(0 => 'pim_catalog_multiselect'));
