<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.query.elasticsearch.filter.family_variant' shared service.

return $this->services['pim_catalog.query.elasticsearch.filter.family_variant'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Filter\Field\FamilyVariantFilter(${($_ = isset($this->services['pim_catalog.repository.family_variant']) ? $this->services['pim_catalog.repository.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Repository_FamilyVariantService.php')) && false ?: '_'}, array(0 => 'family_variant'), array(0 => 'IN', 1 => 'NOT IN', 2 => 'EMPTY', 3 => 'NOT EMPTY'));
