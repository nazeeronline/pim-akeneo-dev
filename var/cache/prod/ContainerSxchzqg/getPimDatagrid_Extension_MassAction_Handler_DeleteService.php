<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.mass_action.handler.delete' shared service.

return $this->services['pim_datagrid.extension.mass_action.handler.delete'] = new \Oro\Bundle\PimDataGridBundle\Extension\MassAction\Handler\DeleteMassActionHandler(${($_ = isset($this->services['pim_datagrid.datasource.result_record.hydrator.object_id']) ? $this->services['pim_datagrid.datasource.result_record.hydrator.object_id'] : $this->services['pim_datagrid.datasource.result_record.hydrator.object_id'] = new \Oro\Bundle\PimDataGridBundle\Datasource\ResultRecord\Orm\ObjectIdHydrator()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});