<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.flat_to_standard.product.columns_merger' shared service.

return $this->services['pim_connector.array_converter.flat_to_standard.product.columns_merger'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\ColumnsMerger(${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.product.attribute_column_info_extractor']) ? $this->services['pim_connector.array_converter.flat_to_standard.product.attribute_column_info_extractor'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_FlatToStandard_Product_AttributeColumnInfoExtractorService.php')) && false ?: '_'});
