<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_analytics.repository.family' shared service.

return $this->services['pim_analytics.repository.family'] = new \Akeneo\Platform\Bundle\AnalyticsBundle\Repository\EntityCountableRepository(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 'Akeneo\\Pim\\Structure\\Component\\Model\\Family');
