<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.sorter.product.value_sorter' shared service.

return $this->services['pim_datagrid.extension.sorter.product.value_sorter'] = new \Oro\Bundle\PimDataGridBundle\Extension\Sorter\Product\ValueSorter(${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'});
