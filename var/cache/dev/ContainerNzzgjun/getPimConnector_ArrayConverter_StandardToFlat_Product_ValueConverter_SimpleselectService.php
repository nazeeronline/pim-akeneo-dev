<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.standard_to_flat.product.value_converter.simpleselect' shared service.

return $this->services['pim_connector.array_converter.standard_to_flat.product.value_converter.simpleselect'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\StandardToFlat\Product\ValueConverter\SimpleSelectConverter(${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.product.attribute_columns_resolver']) ? $this->services['pim_connector.array_converter.flat_to_standard.product.attribute_columns_resolver'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_FlatToStandard_Product_AttributeColumnsResolverService.php')) && false ?: '_'}, array(0 => 'pim_catalog_simpleselect', 1 => 'pim_reference_data_simpleselect'));
