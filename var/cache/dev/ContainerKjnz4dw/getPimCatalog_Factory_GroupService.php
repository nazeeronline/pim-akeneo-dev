<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.factory.group' shared service.

return $this->services['pim_catalog.factory.group'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\GroupFactory(${($_ = isset($this->services['pim_catalog.repository.group_type']) ? $this->services['pim_catalog.repository.group_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_GroupTypeService.php')) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\Group');
