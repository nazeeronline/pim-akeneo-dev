<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_analytics.data_collector.bundles' shared service.

return $this->services['pim_analytics.data_collector.bundles'] = new \Akeneo\Platform\Bundle\AnalyticsBundle\DataCollector\BundlesDataCollector($this->parameters['kernel.bundles']);