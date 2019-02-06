<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.job.csv_association_type_import' shared service.

return $this->services['pim_connector.job.csv_association_type_import'] = new \Akeneo\Tool\Component\Batch\Job\Job('csv_association_type_import', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_connector.step.charset_validator']) ? $this->services['pim_connector.step.charset_validator'] : $this->load(__DIR__.'/getPimConnector_Step_CharsetValidatorService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['pim_connector.step.csv_association_type.import']) ? $this->services['pim_connector.step.csv_association_type.import'] : $this->load(__DIR__.'/getPimConnector_Step_CsvAssociationType_ImportService.php')) && false ?: '_'}));
