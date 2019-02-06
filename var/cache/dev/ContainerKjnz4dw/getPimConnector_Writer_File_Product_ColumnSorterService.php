<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.file.product.column_sorter' shared service.

return $this->services['pim_connector.writer.file.product.column_sorter'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ProductColumnSorter(${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter']) ? $this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter'] : $this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\FieldSplitter()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.association_type']) ? $this->services['pim_catalog.repository.association_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_AssociationTypeService.php')) && false ?: '_'}, array(0 => 'categories', 1 => 'enabled', 2 => 'family', 3 => 'parent', 4 => 'groups'));