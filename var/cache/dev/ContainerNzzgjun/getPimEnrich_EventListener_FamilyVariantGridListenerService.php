<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.event_listener.family_variant_grid_listener' shared service.

return $this->services['pim_enrich.event_listener.family_variant_grid_listener'] = new \Oro\Bundle\PimDataGridBundle\EventListener\AddParametersToGridListener(array(0 => 'family_id', 1 => 'localeCode'), ${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->getOroDatagrid_Datagrid_RequestParamsService()) && false ?: '_'}, false, true);
