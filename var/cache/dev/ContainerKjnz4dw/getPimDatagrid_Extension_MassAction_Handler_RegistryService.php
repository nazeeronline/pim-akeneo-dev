<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.mass_action.handler.registry' shared service.

$this->services['pim_datagrid.extension.mass_action.handler.registry'] = $instance = new \Oro\Bundle\PimDataGridBundle\Extension\MassAction\MassActionHandlerRegistry();

$instance->addHandler('mass_edit', ${($_ = isset($this->services['pim_datagrid.extension.mass_action.handler.edit']) ? $this->services['pim_datagrid.extension.mass_action.handler.edit'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_Handler_EditService.php')) && false ?: '_'});
$instance->addHandler('quick_export', ${($_ = isset($this->services['pim_datagrid.extension.mass_action.handler.export']) ? $this->services['pim_datagrid.extension.mass_action.handler.export'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_Handler_ExportService.php')) && false ?: '_'});
$instance->addHandler('product_quick_export', ${($_ = isset($this->services['pim_datagrid.extension.mass_action.handler.product_export']) ? $this->services['pim_datagrid.extension.mass_action.handler.product_export'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_Handler_ProductExportService.php')) && false ?: '_'});
$instance->addHandler('sequential_edit', ${($_ = isset($this->services['pim_datagrid.extension.mass_action.handler.sequential_edit']) ? $this->services['pim_datagrid.extension.mass_action.handler.sequential_edit'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_Handler_SequentialEditService.php')) && false ?: '_'});
$instance->addHandler('mass_delete', ${($_ = isset($this->services['pim_datagrid.extension.mass_action.handler.delete']) ? $this->services['pim_datagrid.extension.mass_action.handler.delete'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_Handler_DeleteService.php')) && false ?: '_'});
$instance->addHandler('product_mass_delete', ${($_ = isset($this->services['pim_datagrid.extension.mass_action.handler.product_delete']) ? $this->services['pim_datagrid.extension.mass_action.handler.product_delete'] : $this->load(__DIR__.'/getPimDatagrid_Extension_MassAction_Handler_ProductDeleteService.php')) && false ?: '_'});

return $instance;