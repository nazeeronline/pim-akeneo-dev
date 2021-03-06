<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.factory.value_collection' shared service.

return $this->services['pim_catalog.factory.value_collection'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\ValueCollectionFactory(${($_ = isset($this->services['pim_catalog.factory.value']) ? $this->services['pim_catalog.factory.value'] : $this->load(__DIR__.'/getPimCatalog_Factory_ValueService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->load(__DIR__.'/getLoggerService.php')) && false ?: '_'});
