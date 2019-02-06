<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_import_export.manager.job_execution' shared service.

return $this->services['pim_import_export.manager.job_execution'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Manager\JobExecutionManager(${($_ = isset($this->services['pim_enrich.repository.job_execution']) ? $this->services['pim_enrich.repository.job_execution'] : $this->load(__DIR__.'/getPimEnrich_Repository_JobExecutionService.php')) && false ?: '_'}, ${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
