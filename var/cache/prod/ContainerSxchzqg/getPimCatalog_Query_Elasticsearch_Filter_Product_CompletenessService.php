<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.query.elasticsearch.filter.product.completeness' shared service.

return $this->services['pim_catalog.query.elasticsearch.filter.product.completeness'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\Product\CompletenessFilter(${($_ = isset($this->services['pim_catalog.repository.cached_channel']) ? $this->services['pim_catalog.repository.cached_channel'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedChannelService.php')) && false ?: '_'}, array(0 => 'completeness'), array(0 => 'NOT EQUALS ON AT LEAST ONE LOCALE', 1 => 'EQUALS ON AT LEAST ONE LOCALE', 2 => 'GREATER THAN ON AT LEAST ONE LOCALE', 3 => 'GREATER OR EQUALS THAN ON AT LEAST ONE LOCALE', 4 => 'LOWER OR EQUALS THAN ON AT LEAST ONE LOCALE', 5 => 'LOWER THAN ON AT LEAST ONE LOCALE', 6 => 'GREATER THAN ON ALL LOCALES', 7 => 'GREATER OR EQUALS THAN ON ALL LOCALES', 8 => 'LOWER OR EQUALS THAN ON ALL LOCALES', 9 => 'LOWER THAN ON ALL LOCALES', 10 => '!=', 11 => '=', 12 => '>', 13 => '>=', 14 => '<=', 15 => '<', 16 => 'EMPTY'));
