<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.event_listener.product_group_grid_after_listener' shared service.

return $this->services['pim_enrich.event_listener.product_group_grid_after_listener'] = new \Oro\Bundle\PimDataGridBundle\EventListener\AddParametersToProductGridListener(array(0 => 'dataLocale', 1 => 'currentGroup'), ${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->load(__DIR__.'/getOroDatagrid_Datagrid_RequestParamsService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.context.catalog']) ? $this->services['pim_catalog.context.catalog'] : $this->services['pim_catalog.context.catalog'] = new \Akeneo\Pim\Enrichment\Bundle\Context\CatalogContext()) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'}, true, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
