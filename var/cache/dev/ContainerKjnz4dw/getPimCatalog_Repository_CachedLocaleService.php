<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.repository.cached_locale' shared service.

return $this->services['pim_catalog.repository.cached_locale'] = new \Akeneo\Tool\Component\StorageUtils\Repository\BaseCachedObjectRepository(${($_ = isset($this->services['pim_catalog.repository.locale']) ? $this->services['pim_catalog.repository.locale'] : $this->getPimCatalog_Repository_LocaleService()) && false ?: '_'});