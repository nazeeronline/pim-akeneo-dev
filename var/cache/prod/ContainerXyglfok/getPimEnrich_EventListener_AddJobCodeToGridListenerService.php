<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.event_listener.add_job_code_to_grid_listener' shared service.

return $this->services['pim_enrich.event_listener.add_job_code_to_grid_listener'] = new \Oro\Bundle\PimDataGridBundle\EventListener\AddJobCodeToGridListener(${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->load(__DIR__.'/getOroDatagrid_Datagrid_RequestParamsService.php')) && false ?: '_'});
