<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.normalizer.standard.translation' shared service.

return $this->services['pim_catalog.normalizer.standard.translation'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\TranslationNormalizer(${($_ = isset($this->services['pim_catalog.repository.cached_locale']) ? $this->services['pim_catalog.repository.cached_locale'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedLocaleService.php')) && false ?: '_'});
