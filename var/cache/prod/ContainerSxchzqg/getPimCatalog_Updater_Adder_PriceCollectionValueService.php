<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.adder.price_collection_value' shared service.

return $this->services['pim_catalog.updater.adder.price_collection_value'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Adder\PriceCollectionAttributeAdder(${($_ = isset($this->services['pim_catalog.builder.entity_with_values']) ? $this->services['pim_catalog.builder.entity_with_values'] : $this->load(__DIR__.'/getPimCatalog_Builder_EntityWithValuesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_standard_format_serializer']) ? $this->services['pim_standard_format_serializer'] : $this->load(__DIR__.'/getPimStandardFormatSerializerService.php')) && false ?: '_'}, array(0 => 'pim_catalog_price_collection'));
