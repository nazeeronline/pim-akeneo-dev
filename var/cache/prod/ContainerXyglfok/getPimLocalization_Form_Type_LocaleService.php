<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_localization.form.type.locale' shared service.

return $this->services['pim_localization.form.type.locale'] = new \Akeneo\Platform\Bundle\UIBundle\Form\Type\LocaleType(${($_ = isset($this->services['pim_localization.provider.ui_locale']) ? $this->services['pim_localization.provider.ui_locale'] : $this->load(__DIR__.'/getPimLocalization_Provider_UiLocaleService.php')) && false ?: '_'});