<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_versioning.purger.advisor.skip_last_version' shared service.

return $this->services['pim_versioning.purger.advisor.skip_last_version'] = new \Akeneo\Tool\Bundle\VersioningBundle\Purger\SkipLastVersionPurgerAdvisor(${($_ = isset($this->services['pim_versioning.repository.version']) ? $this->services['pim_versioning.repository.version'] : $this->load(__DIR__.'/getPimVersioning_Repository_VersionService.php')) && false ?: '_'});
