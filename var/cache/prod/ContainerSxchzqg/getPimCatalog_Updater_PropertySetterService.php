<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.property_setter' shared service.

return $this->services['pim_catalog.updater.property_setter'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\PropertySetter(${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.setter.registry']) ? $this->services['pim_catalog.updater.setter.registry'] : $this->load(__DIR__.'/getPimCatalog_Updater_Setter_RegistryService.php')) && false ?: '_'});