<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.controller.rest.datagrid_view' shared service.

return $this->services['pim_datagrid.controller.rest.datagrid_view'] = new \Oro\Bundle\PimDataGridBundle\Controller\Rest\DatagridViewController(${($_ = isset($this->services['pim_internal_api_serializer']) ? $this->services['pim_internal_api_serializer'] : $this->load(__DIR__.'/getPimInternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.repository.datagrid_view']) ? $this->services['pim_datagrid.repository.datagrid_view'] : $this->load(__DIR__.'/getPimDatagrid_Repository_DatagridViewService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.manager.datagrid_view']) ? $this->services['pim_datagrid.manager.datagrid_view'] : $this->load(__DIR__.'/getPimDatagrid_Manager_DatagridViewService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.saver.datagrid_view']) ? $this->services['pim_datagrid.saver.datagrid_view'] : $this->load(__DIR__.'/getPimDatagrid_Saver_DatagridViewService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.remover.datagrid_view']) ? $this->services['pim_datagrid.remover.datagrid_view'] : $this->load(__DIR__.'/getPimDatagrid_Remover_DatagridViewService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load(__DIR__.'/getValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.filter.chained']) ? $this->services['pim_catalog.filter.chained'] : $this->load(__DIR__.'/getPimCatalog_Filter_ChainedService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.updater.datagrid_view']) ? $this->services['pim_datagrid.updater.datagrid_view'] : $this->load(__DIR__.'/getPimDatagrid_Updater_DatagridViewService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.factory.datagrid_view']) ? $this->services['pim_datagrid.factory.datagrid_view'] : $this->services['pim_datagrid.factory.datagrid_view'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Oro\\Bundle\\PimDataGridBundle\\Entity\\DatagridView')) && false ?: '_'});
