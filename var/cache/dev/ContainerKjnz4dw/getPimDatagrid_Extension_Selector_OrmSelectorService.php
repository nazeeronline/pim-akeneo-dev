<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.selector.orm_selector' shared service.

$this->services['pim_datagrid.extension.selector.orm_selector'] = $instance = new \Oro\Bundle\PimDataGridBundle\Extension\Selector\OrmSelectorExtension(${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->getOroDatagrid_Datagrid_RequestParamsService()) && false ?: '_'});

$instance->addEligibleDatasource('pim_datasource_product');
$instance->addEligibleDatasource('pim_datasource_associated_product');
$instance->addEligibleDatasource('pimee_datasource_published_product');

return $instance;
