<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_reference_data.datagrid.normalizer.reference_data_collection' shared service.

return $this->services['pim_reference_data.datagrid.normalizer.reference_data_collection'] = new \Oro\Bundle\PimDataGridBundle\Normalizer\Product\ReferenceDataCollectionNormalizer(${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_reference_data.repository_resolver']) ? $this->services['pim_reference_data.repository_resolver'] : $this->load(__DIR__.'/getPimReferenceData_RepositoryResolverService.php')) && false ?: '_'});
