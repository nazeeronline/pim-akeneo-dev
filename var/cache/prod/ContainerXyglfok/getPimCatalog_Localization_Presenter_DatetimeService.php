<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.localization.presenter.datetime' shared service.

return $this->services['pim_catalog.localization.presenter.datetime'] = new \Akeneo\Tool\Component\Localization\Presenter\DatePresenter(${($_ = isset($this->services['pim_catalog.localization.factory.datetime']) ? $this->services['pim_catalog.localization.factory.datetime'] : $this->load(__DIR__.'/getPimCatalog_Localization_Factory_DatetimeService.php')) && false ?: '_'}, array(0 => 'created_at', 1 => 'updated_at'));
