<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_analytics.controller.system_info' shared service.

return $this->services['pim_analytics.controller.system_info'] = new \Akeneo\Platform\Bundle\AnalyticsBundle\Controller\SystemInfoController(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'}, ${($_ = isset($this->services['pim_analytics.data_collector.chained']) ? $this->services['pim_analytics.data_collector.chained'] : $this->load(__DIR__.'/getPimAnalytics_DataCollector_ChainedService.php')) && false ?: '_'});
