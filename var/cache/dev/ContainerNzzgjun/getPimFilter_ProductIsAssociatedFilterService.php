<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_filter.product_is_associated_filter' shared service.

return $this->services['pim_filter.product_is_associated_filter'] = new \Oro\Bundle\PimFilterBundle\Filter\Product\IsAssociatedFilter(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_filter.product_utility']) ? $this->services['pim_filter.product_utility'] : $this->services['pim_filter.product_utility'] = new \Oro\Bundle\PimFilterBundle\Filter\ProductFilterUtility()) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.datagrid.request.parameters_extractor']) ? $this->services['pim_datagrid.datagrid.request.parameters_extractor'] : $this->load(__DIR__.'/getPimDatagrid_Datagrid_Request_ParametersExtractorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.association_type']) ? $this->services['pim_catalog.repository.association_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_AssociationTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->getPimCatalog_Repository_ProductService()) && false ?: '_'});