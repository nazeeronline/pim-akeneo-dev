<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.repository.cached_currency' shared service.

return $this->services['pim_catalog.repository.cached_currency'] = new \Akeneo\Tool\Component\StorageUtils\Repository\BaseCachedObjectRepository(${($_ = isset($this->services['pim_catalog.repository.currency']) ? $this->services['pim_catalog.repository.currency'] : $this->load(__DIR__.'/getPimCatalog_Repository_CurrencyService.php')) && false ?: '_'});