<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.doctrine.query.ascendant_categories' shared service.

return $this->services['pim_enrich.doctrine.query.ascendant_categories'] = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Query\AscendantCategories(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
