<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_installer.job.fixtures_job_yml' shared service.

$a = ${($_ = isset($this->services['pim_installer.step.fixtures_job_yml.import']) ? $this->services['pim_installer.step.fixtures_job_yml.import'] : $this->load(__DIR__.'/getPimInstaller_Step_FixturesJobYml_ImportService.php')) && false ?: '_'};

if (isset($this->services['pim_installer.job.fixtures_job_yml'])) {
    return $this->services['pim_installer.job.fixtures_job_yml'];
}

return $this->services['pim_installer.job.fixtures_job_yml'] = new \Akeneo\Tool\Component\Batch\Job\Job('fixtures_job_yml', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_connector.step.charset_validator']) ? $this->services['pim_connector.step.charset_validator'] : $this->load(__DIR__.'/getPimConnector_Step_CharsetValidatorService.php')) && false ?: '_'}, 1 => $a));
