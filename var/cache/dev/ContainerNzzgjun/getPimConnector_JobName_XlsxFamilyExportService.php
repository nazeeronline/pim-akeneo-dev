<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.job_name.xlsx_family_export' shared service.

return $this->services['pim_connector.job_name.xlsx_family_export'] = new \Akeneo\Tool\Component\Batch\Job\Job('xlsx_family_export', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_connector.step.xlsx_family.export']) ? $this->services['pim_connector.step.xlsx_family.export'] : $this->load(__DIR__.'/getPimConnector_Step_XlsxFamily_ExportService.php')) && false ?: '_'}));
