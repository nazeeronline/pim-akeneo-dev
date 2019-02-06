<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.normalizer.version' shared service.

return $this->services['pim_enrich.normalizer.version'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\InternalApi\VersionNormalizer(${($_ = isset($this->services['pim_user.manager']) ? $this->services['pim_user.manager'] : $this->load(__DIR__.'/getPimUser_ManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.presenter.datetime']) ? $this->services['pim_catalog.localization.presenter.datetime'] : $this->load(__DIR__.'/getPimCatalog_Localization_Presenter_DatetimeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.presenter.registry']) ? $this->services['pim_catalog.localization.presenter.registry'] : $this->load(__DIR__.'/getPimCatalog_Localization_Presenter_RegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'});
