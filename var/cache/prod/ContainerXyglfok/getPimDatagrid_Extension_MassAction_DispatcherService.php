<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.mass_action.dispatcher' shared service.

return $this->services['pim_datagrid.extension.mass_action.dispatcher'] = new \Oro\Bundle\PimDataGridBundle\Extension\MassAction\MassActionDispatcher(${($_ = isset($this->services['pim_datagrid.extension.mass_action.handler.registry']) ? $this->services['pim_datagrid.extension.mass_action.handler.registry'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_Handler_RegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['oro_datagrid.datagrid.manager']) ? $this->services['oro_datagrid.datagrid.manager'] : $this->services['oro_datagrid.datagrid.manager'] = new \Oro\Bundle\DataGridBundle\Datagrid\Manager($this)) && false ?: '_'}, ${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->load(__DIR__.'/getOroDatagrid_Datagrid_RequestParamsService.php')) && false ?: '_'}, ${($_ = isset($this->services['oro_datagrid.mass_action.parameters_parser']) ? $this->services['oro_datagrid.mass_action.parameters_parser'] : $this->services['oro_datagrid.mass_action.parameters_parser'] = new \Oro\Bundle\DataGridBundle\Extension\MassAction\MassActionParametersParser()) && false ?: '_'}, array(0 => 'product-grid', 1 => 'proposal-grid', 2 => 'published-product-grid'));
