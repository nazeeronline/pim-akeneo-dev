<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.normalizer.indexing_product.product.media' shared service.

return $this->services['pim_catalog.normalizer.indexing_product.product.media'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Indexing\Value\MediaNormalizer(${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'});
