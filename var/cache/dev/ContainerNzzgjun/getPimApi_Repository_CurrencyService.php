<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.repository.currency' shared service.

return $this->services['pim_api.repository.currency'] = new \Akeneo\Tool\Bundle\ApiBundle\Doctrine\ORM\Repository\ApiResourceRepository(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 'Akeneo\\Channel\\Component\\Model\\Currency', ${($_ = isset($this->services['pim_catalog.repository.currency']) ? $this->services['pim_catalog.repository.currency'] : $this->getPimCatalog_Repository_CurrencyService()) && false ?: '_'});