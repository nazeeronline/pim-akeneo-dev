<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.charset_validator' shared service.

return $this->services['pim_connector.step.charset_validator'] = new \Akeneo\Tool\Component\Connector\Step\ValidatorStep('validation', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.validator.item.charset_validator']) ? $this->services['pim_connector.validator.item.charset_validator'] : $this->services['pim_connector.validator.item.charset_validator'] = new \Akeneo\Tool\Component\Connector\Item\CharsetValidator()) && false ?: '_'});