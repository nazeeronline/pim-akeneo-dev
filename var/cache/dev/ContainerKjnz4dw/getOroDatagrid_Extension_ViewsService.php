<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_datagrid.extension.views' shared service.

return $this->services['oro_datagrid.extension.views'] = new \Oro\Bundle\DataGridBundle\Extension\GridViews\GridViewsExtension(${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->getOroDatagrid_Datagrid_RequestParamsService()) && false ?: '_'});
