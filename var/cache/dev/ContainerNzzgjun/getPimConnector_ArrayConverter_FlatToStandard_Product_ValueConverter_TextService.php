<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.flat_to_standard.product.value_converter.text' shared service.

return $this->services['pim_connector.array_converter.flat_to_standard.product.value_converter.text'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\ValueConverter\TextConverter(${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter']) ? $this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter'] : $this->services['pim_connector.array_converter.flat_to_standard.product.field_splitter'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\FieldSplitter()) && false ?: '_'}, array(0 => 'pim_catalog_identifier', 1 => 'pim_catalog_text', 2 => 'pim_catalog_textarea'));
