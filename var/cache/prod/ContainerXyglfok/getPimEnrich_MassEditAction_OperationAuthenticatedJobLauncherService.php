<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.mass_edit_action.operation_authenticated_job_launcher' shared service.

return $this->services['pim_enrich.mass_edit_action.operation_authenticated_job_launcher'] = new \Akeneo\Pim\Enrichment\Bundle\MassEditAction\OperationJobLauncher(${($_ = isset($this->services['pim_connector.launcher.authenticated_job_launcher']) ? $this->services['pim_connector.launcher.authenticated_job_launcher'] : $this->load(__DIR__.'/getPimConnector_Launcher_AuthenticatedJobLauncherService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job.job_instance_repository']) ? $this->services['akeneo_batch.job.job_instance_repository'] : $this->load(__DIR__.'/getAkeneoBatch_Job_JobInstanceRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
