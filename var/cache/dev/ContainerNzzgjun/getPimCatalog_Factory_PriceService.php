<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.factory.price' shared service.

return $this->services['pim_catalog.factory.price'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\PriceFactory(${($_ = isset($this->services['pim_catalog.repository.cached_currency']) ? $this->services['pim_catalog.repository.cached_currency'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedCurrencyService.php')) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductPrice');