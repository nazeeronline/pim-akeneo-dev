<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.flat_to_standard.product_association' shared service.

return $this->services['pim_connector.array_converter.flat_to_standard.product_association'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\ProductAssociation(${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.product']) ? $this->services['pim_connector.array_converter.flat_to_standard.product'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_FlatToStandard_ProductService.php')) && false ?: '_'});