<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.event_listener.add_locale_code_to_grid' shared service.

return $this->services['pim_enrich.event_listener.add_locale_code_to_grid'] = new \Oro\Bundle\PimDataGridBundle\EventListener\AddLocaleCodeToGridListener(${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->load(__DIR__.'/getOroDatagrid_Datagrid_RequestParamsService.php')) && false ?: '_'});
