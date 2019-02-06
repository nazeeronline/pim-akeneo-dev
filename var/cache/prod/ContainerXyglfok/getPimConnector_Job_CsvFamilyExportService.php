<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.job.csv_family_export' shared service.

return $this->services['pim_connector.job.csv_family_export'] = new \Akeneo\Tool\Component\Batch\Job\Job('csv_family_export', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_connector.step.csv_family.export']) ? $this->services['pim_connector.step.csv_family.export'] : $this->load(__DIR__.'/getPimConnector_Step_CsvFamily_ExportService.php')) && false ?: '_'}));
