<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.sorter.product.in_group_sorter' shared service.

return $this->services['pim_datagrid.extension.sorter.product.in_group_sorter'] = new \Oro\Bundle\PimDataGridBundle\Extension\Sorter\Product\InGroupSorter(${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->load(__DIR__.'/getOroDatagrid_Datagrid_RequestParamsService.php')) && false ?: '_'});
