<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.localization.presenter.date.attribute_option' shared service.

return $this->services['pim_catalog.localization.presenter.date.attribute_option'] = new \Akeneo\Tool\Component\Localization\Presenter\DatePresenter(${($_ = isset($this->services['pim_catalog.localization.factory.date']) ? $this->services['pim_catalog.localization.factory.date'] : $this->load(__DIR__.'/getPimCatalog_Localization_Factory_DateService.php')) && false ?: '_'}, array(0 => 'date_min', 1 => 'date_max'));
