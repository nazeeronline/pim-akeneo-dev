<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.property_remover' shared service.

return $this->services['pim_catalog.updater.property_remover'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\PropertyRemover(${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.remover.registry']) ? $this->services['pim_catalog.updater.remover.registry'] : $this->load(__DIR__.'/getPimCatalog_Updater_Remover_RegistryService.php')) && false ?: '_'});
