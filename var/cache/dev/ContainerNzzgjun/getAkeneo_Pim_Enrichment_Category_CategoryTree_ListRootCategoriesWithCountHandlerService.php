<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo.pim.enrichment.category.category_tree.list_root_categories_with_count_handler' shared service.

return $this->services['akeneo.pim.enrichment.category.category_tree.list_root_categories_with_count_handler'] = new \Akeneo\Pim\Enrichment\Component\Category\CategoryTree\UseCase\ListRootCategoriesWithCountHandler(${($_ = isset($this->services['pim_catalog.repository.category']) ? $this->services['pim_catalog.repository.category'] : $this->getPimCatalog_Repository_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo.pim.enrichment.category.category_tree.query.list_root_categories_with_count_including_sub_categories']) ? $this->services['akeneo.pim.enrichment.category.category_tree.query.list_root_categories_with_count_including_sub_categories'] : $this->load(__DIR__.'/getAkeneo_Pim_Enrichment_Category_CategoryTree_Query_ListRootCategoriesWithCountIncludingSubCategoriesService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo.pim.enrichment.category.category_tree.query.list_root_categories_with_count_not_including_sub_categories']) ? $this->services['akeneo.pim.enrichment.category.category_tree.query.list_root_categories_with_count_not_including_sub_categories'] : $this->load(__DIR__.'/getAkeneo_Pim_Enrichment_Category_CategoryTree_Query_ListRootCategoriesWithCountNotIncludingSubCategoriesService.php')) && false ?: '_'});
