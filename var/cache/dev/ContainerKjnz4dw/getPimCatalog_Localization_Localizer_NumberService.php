<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.localization.localizer.number' shared service.

return $this->services['pim_catalog.localization.localizer.number'] = new \Akeneo\Tool\Component\Localization\Localizer\NumberLocalizer(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.factory.number']) ? $this->services['pim_catalog.localization.factory.number'] : $this->services['pim_catalog.localization.factory.number'] = new \Akeneo\Tool\Component\Localization\Factory\NumberFactory(array())) && false ?: '_'}, array(0 => 'pim_catalog_number'));
