<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.repository.family' shared service.

return $this->services['pim_api.repository.family'] = new \Akeneo\Tool\Bundle\ApiBundle\Doctrine\ORM\Repository\ApiResourceRepository(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 'Akeneo\\Pim\\Structure\\Component\\Model\\Family', ${($_ = isset($this->services['pim_catalog.repository.family']) ? $this->services['pim_catalog.repository.family'] : $this->getPimCatalog_Repository_FamilyService()) && false ?: '_'});
