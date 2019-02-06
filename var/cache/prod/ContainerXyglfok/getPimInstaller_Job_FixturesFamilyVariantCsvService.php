<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_installer.job.fixtures_family_variant_csv' shared service.

return $this->services['pim_installer.job.fixtures_family_variant_csv'] = new \Akeneo\Tool\Component\Batch\Job\Job('fixtures_family_variant_csv', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_connector.step.charset_validator']) ? $this->services['pim_connector.step.charset_validator'] : $this->load(__DIR__.'/getPimConnector_Step_CharsetValidatorService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['pim_connector.step.csv_family_variant.import']) ? $this->services['pim_connector.step.csv_family_variant.import'] : $this->load(__DIR__.'/getPimConnector_Step_CsvFamilyVariant_ImportService.php')) && false ?: '_'}));
