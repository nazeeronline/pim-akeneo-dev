<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_datagrid.configuration.provider.chain' shared service.

$this->services['oro_datagrid.configuration.provider.chain'] = $instance = new \Oro\Bundle\DataGridBundle\Provider\ChainConfigurationProvider();

$instance->addProvider(${($_ = isset($this->services['oro_datagrid.configuration.provider']) ? $this->services['oro_datagrid.configuration.provider'] : $this->load(__DIR__.'/getOroDatagrid_Configuration_ProviderService.php')) && false ?: '_'});

return $instance;
