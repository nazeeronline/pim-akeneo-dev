<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_installer.fixture_loader.path_provider' shared service.

return $this->services['pim_installer.fixture_loader.path_provider'] = new \Akeneo\Platform\Bundle\InstallerBundle\FixtureLoader\FixturePathProvider($this->parameters['kernel.bundles'], 'PimInstallerBundle:icecat_demo_dev');
