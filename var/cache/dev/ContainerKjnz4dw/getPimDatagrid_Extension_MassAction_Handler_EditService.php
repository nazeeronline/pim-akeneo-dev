<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.mass_action.handler.edit' shared service.

return $this->services['pim_datagrid.extension.mass_action.handler.edit'] = new \Oro\Bundle\PimDataGridBundle\Extension\MassAction\Handler\EditMassActionHandler(${($_ = isset($this->services['pim_datagrid.datasource.result_record.hydrator.orm.object']) ? $this->services['pim_datagrid.datasource.result_record.hydrator.orm.object'] : $this->services['pim_datagrid.datasource.result_record.hydrator.orm.object'] = new \Oro\Bundle\PimDataGridBundle\Datasource\ResultRecord\Orm\ObjectHydrator()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
