<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.flat_to_standard.product.association_columns_resolver' shared service.

return $this->services['pim_connector.array_converter.flat_to_standard.product.association_columns_resolver'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\ArrayConverter\FlatToStandard\AssociationColumnsResolver(${($_ = isset($this->services['pim_catalog.repository.association_type']) ? $this->services['pim_catalog.repository.association_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_AssociationTypeService.php')) && false ?: '_'});