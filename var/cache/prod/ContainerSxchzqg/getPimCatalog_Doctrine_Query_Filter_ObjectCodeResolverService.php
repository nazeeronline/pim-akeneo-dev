<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.doctrine.query.filter.object_code_resolver' shared service.

$this->services['pim_catalog.doctrine.query.filter.object_code_resolver'] = $instance = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\Common\Filter\ObjectCodeResolver(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});

$instance->addFieldMapping('family', 'Akeneo\\Pim\\Structure\\Component\\Model\\Family');
$instance->addFieldMapping('option', 'Akeneo\\Pim\\Structure\\Component\\Model\\AttributeOption');
$instance->addFieldMapping('category', 'Akeneo\\Pim\\Enrichment\\Component\\Category\\Model\\Category');
$instance->addFieldMapping('group', 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\Group');

return $instance;
