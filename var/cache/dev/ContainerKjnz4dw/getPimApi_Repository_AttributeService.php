<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.repository.attribute' shared service.

return $this->services['pim_api.repository.attribute'] = new \Akeneo\Pim\Structure\Bundle\Doctrine\ORM\Repository\ExternalApi\AttributeRepository(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 'Akeneo\\Pim\\Structure\\Component\\Model\\Attribute', ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'});
