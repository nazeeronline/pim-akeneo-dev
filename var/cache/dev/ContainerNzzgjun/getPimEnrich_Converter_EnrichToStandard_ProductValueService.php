<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.converter.enrich_to_standard.product_value' shared service.

return $this->services['pim_enrich.converter.enrich_to_standard.product_value'] = new \Akeneo\Pim\Enrichment\Component\Product\Converter\InternalApiToStandard\ValueConverter(${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'});
