<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.query.elasticsearch.sorter.in_group' shared service.

return $this->services['pim_catalog.query.elasticsearch.sorter.in_group'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Sorter\InGroupSorter(${($_ = isset($this->services['pim_catalog.repository.group']) ? $this->services['pim_catalog.repository.group'] : $this->load(__DIR__.'/getPimCatalog_Repository_GroupService.php')) && false ?: '_'});
