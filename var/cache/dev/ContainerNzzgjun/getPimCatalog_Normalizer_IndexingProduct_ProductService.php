<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.normalizer.indexing_product.product' shared service.

return $this->services['pim_catalog.normalizer.indexing_product.product'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Indexing\Product\ProductNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.indexing_product.product.properties']) ? $this->services['pim_catalog.normalizer.indexing_product.product.properties'] : $this->services['pim_catalog.normalizer.indexing_product.product.properties'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Indexing\Product\PropertiesNormalizer()) && false ?: '_'});
