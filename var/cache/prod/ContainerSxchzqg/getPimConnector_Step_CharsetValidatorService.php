<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.charset_validator' shared service.

return $this->services['pim_connector.step.charset_validator'] = new \Akeneo\Tool\Component\Connector\Step\ValidatorStep('validation', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.validator.item.charset_validator']) ? $this->services['pim_connector.validator.item.charset_validator'] : $this->services['pim_connector.validator.item.charset_validator'] = new \Akeneo\Tool\Component\Connector\Item\CharsetValidator()) && false ?: '_'});
