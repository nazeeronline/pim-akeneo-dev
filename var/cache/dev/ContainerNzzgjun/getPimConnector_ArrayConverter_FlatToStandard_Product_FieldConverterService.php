<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.flat_to_standard.product.field_converter' shared service.

return $this->services['pim_connector.array_converter.flat_to_standard.product.field_converter'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\FieldConverter(${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter']) ? $this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter'] : $this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\FieldSplitter()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.product.association_columns_resolver']) ? $this->services['pim_connector.array_converter.flat_to_standard.product.association_columns_resolver'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_FlatToStandard_Product_AssociationColumnsResolverService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.group_type']) ? $this->services['pim_catalog.repository.group_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_GroupTypeService.php')) && false ?: '_'});