<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.event_subscriber.default_view' shared service.

return $this->services['pim_datagrid.event_subscriber.default_view'] = new \Oro\Bundle\PimDataGridBundle\EventSubscriber\DefaultViewSubscriber(${($_ = isset($this->services['pim_datagrid.repository.datagrid_view']) ? $this->services['pim_datagrid.repository.datagrid_view'] : $this->load(__DIR__.'/getPimDatagrid_Repository_DatagridViewService.php')) && false ?: '_'});
