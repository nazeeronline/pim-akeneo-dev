<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.pager' shared service.

return $this->services['pim_datagrid.extension.pager'] = new \Oro\Bundle\PimDataGridBundle\Extension\Pager\PagerExtension(${($_ = isset($this->services['pim_datagrid.extension.pager.pager_resolver']) ? $this->services['pim_datagrid.extension.pager.pager_resolver'] : $this->load(__DIR__.'/getPimDatagrid_Extension_Pager_PagerResolverService.php')) && false ?: '_'}, ${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->load(__DIR__.'/getOroDatagrid_Datagrid_RequestParamsService.php')) && false ?: '_'});
