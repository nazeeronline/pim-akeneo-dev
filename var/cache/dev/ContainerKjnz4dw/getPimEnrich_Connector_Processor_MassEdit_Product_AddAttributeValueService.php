<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.connector.processor.mass_edit.product.add_attribute_value' shared service.

$a = ${($_ = isset($this->services['pim_catalog.validator.product']) ? $this->services['pim_catalog.validator.product'] : $this->load(__DIR__.'/getPimCatalog_Validator_ProductService.php')) && false ?: '_'};

return $this->services['pim_enrich.connector.processor.mass_edit.product.add_attribute_value'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Processor\MassEdit\AddAttributeValueProcessor($a, $a, ${($_ = isset($this->services['pim_catalog.updater.property_adder']) ? $this->services['pim_catalog.updater.property_adder'] : $this->load(__DIR__.'/getPimCatalog_Updater_PropertyAdderService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.entity_with_family_variant.check_attribute_editable']) ? $this->services['pim_catalog.entity_with_family_variant.check_attribute_editable'] : $this->services['pim_catalog.entity_with_family_variant.check_attribute_editable'] = new \Akeneo\Pim\Enrichment\Component\Product\EntityWithFamilyVariant\CheckAttributeEditable()) && false ?: '_'}, array(0 => 'pim_catalog_multiselect', 1 => 'pim_reference_data_multiselect'));
