<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.normalizer.datetime' shared service.

return $this->services['pim_datagrid.normalizer.datetime'] = new \Oro\Bundle\PimDataGridBundle\Normalizer\DateTimeNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.standard.datetime']) ? $this->services['pim_catalog.normalizer.standard.datetime'] : $this->services['pim_catalog.normalizer.standard.datetime'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\DateTimeNormalizer()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.presenter.date']) ? $this->services['pim_catalog.localization.presenter.date'] : $this->load(__DIR__.'/getPimCatalog_Localization_Presenter_DateService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'});
