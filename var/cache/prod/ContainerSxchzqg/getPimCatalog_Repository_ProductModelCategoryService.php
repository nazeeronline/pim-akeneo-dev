<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.repository.product_model_category' shared service.

return $this->services['pim_catalog.repository.product_model_category'] = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Repository\ProductModelCategoryRepository(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModel', 'Akeneo\\Pim\\Enrichment\\Component\\Category\\Model\\Category');
