<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.event_listener.association_group_grid_after_listener' shared service.

return $this->services['pim_enrich.event_listener.association_group_grid_after_listener'] = new \Oro\Bundle\PimDataGridBundle\EventListener\AddParametersToGridListener(array(0 => 'dataLocale', 1 => 'associatedIds'), ${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->getOroDatagrid_Datagrid_RequestParamsService()) && false ?: '_'}, true);
