<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_volume_monitoring.persistence.query.aggregated_average_max_options_per_attribute' shared service.

return $this->services['pim_volume_monitoring.persistence.query.aggregated_average_max_options_per_attribute'] = new \Akeneo\Platform\Bundle\CatalogVolumeMonitoringBundle\Persistence\Query\Sql\AggregatedAverageMaxOptionsPerAttribute(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, -1);
