<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.builder.entity_with_values' shared service.

return $this->services['pim_catalog.builder.entity_with_values'] = new \Akeneo\Pim\Enrichment\Component\Product\Builder\EntityWithValuesBuilder(${($_ = isset($this->services['pim_catalog.resolver.attribute_values']) ? $this->services['pim_catalog.resolver.attribute_values'] : $this->load(__DIR__.'/getPimCatalog_Resolver_AttributeValuesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.value']) ? $this->services['pim_catalog.factory.value'] : $this->load(__DIR__.'/getPimCatalog_Factory_ValueService.php')) && false ?: '_'});