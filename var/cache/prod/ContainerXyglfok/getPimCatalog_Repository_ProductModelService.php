<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.repository.product_model' shared service.

return $this->services['pim_catalog.repository.product_model'] = ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}->getRepository('Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModel');
