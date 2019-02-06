<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.category_tree.product' shared service.

$this->services['pim_enrich.controller.category_tree.product'] = $instance = new \Akeneo\Pim\Enrichment\Bundle\Controller\Ui\CategoryTreeController(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.category']) ? $this->services['pim_catalog.saver.category'] : $this->load(__DIR__.'/getPimCatalog_Saver_CategoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.remover.category']) ? $this->services['pim_catalog.remover.category'] : $this->load(__DIR__.'/getPimCatalog_Remover_CategoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.category']) ? $this->services['pim_catalog.factory.category'] : $this->services['pim_catalog.factory.category'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Enrichment\\Component\\Category\\Model\\Category')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.category']) ? $this->services['pim_catalog.repository.category'] : $this->getPimCatalog_Repository_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'}, array('related_entity' => 'product', 'form_type' => 'Akeneo\\Pim\\Enrichment\\Bundle\\Form\\Type\\CategoryType', 'acl' => 'pim_enrich_product', 'route' => 'pim_enrich'));

$instance->setContainer($this);

return $instance;
