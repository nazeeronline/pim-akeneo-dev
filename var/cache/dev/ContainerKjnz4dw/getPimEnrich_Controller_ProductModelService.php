<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.product_model' shared service.

return $this->services['pim_enrich.controller.product_model'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\Ui\ProductModelController(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->getPimCatalog_Repository_ProductModelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.values_filler.entity_with_family_variant']) ? $this->services['pim_catalog.values_filler.entity_with_family_variant'] : $this->load(__DIR__.'/getPimCatalog_ValuesFiller_EntityWithFamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.category']) ? $this->services['pim_catalog.repository.category'] : $this->getPimCatalog_Repository_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Category\\Model\\Category', 'pim_enrich_product_model_categories_view', '@AkeneoPimEnrichment/ProductModel/listCategories.json.twig');
