<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.controller.export' shared service.

return $this->services['pim_datagrid.controller.export'] = new \Oro\Bundle\PimDataGridBundle\Controller\ExportController(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.extension.mass_action.dispatcher']) ? $this->services['pim_datagrid.extension.mass_action.dispatcher'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_DispatcherService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_serializer']) ? $this->services['pim_serializer'] : $this->load(__DIR__.'/getPimSerializerService.php')) && false ?: '_'});
