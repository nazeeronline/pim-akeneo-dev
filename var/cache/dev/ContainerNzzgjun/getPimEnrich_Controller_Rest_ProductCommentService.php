<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.rest.product_comment' shared service.

return $this->services['pim_enrich.controller.rest.product_comment'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\ProductCommentController(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->getPimCatalog_Repository_ProductService()) && false ?: '_'}, ${($_ = isset($this->services['pim_comment.repository.comment']) ? $this->services['pim_comment.repository.comment'] : $this->load(__DIR__.'/getPimComment_Repository_CommentService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_comment.saver.comment']) ? $this->services['pim_comment.saver.comment'] : $this->load(__DIR__.'/getPimComment_Saver_CommentService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_comment.builder.comment']) ? $this->services['pim_comment.builder.comment'] : $this->services['pim_comment.builder.comment'] = new \Akeneo\Pim\Enrichment\Component\Comment\Builder\CommentBuilder('Akeneo\\Pim\\Enrichment\\Component\\Comment\\Model\\Comment')) && false ?: '_'}, ${($_ = isset($this->services['pim_standard_format_serializer']) ? $this->services['pim_standard_format_serializer'] : $this->load(__DIR__.'/getPimStandardFormatSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.presenter.datetime']) ? $this->services['pim_catalog.localization.presenter.datetime'] : $this->getPimCatalog_Localization_Presenter_DatetimeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.resolver.locale']) ? $this->services['pim_enrich.resolver.locale'] : $this->getPimEnrich_Resolver_LocaleService()) && false ?: '_'});