<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.localization.translator.proxy' shared service.

return $this->services['pim_catalog.localization.translator.proxy'] = new \Akeneo\Tool\Component\Localization\TranslatorProxy(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
