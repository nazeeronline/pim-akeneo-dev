<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_import_export.normalizer.step_execution' shared service.

return $this->services['pim_import_export.normalizer.step_execution'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Normalizer\StepExecutionNormalizer(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.presenter.datetime']) ? $this->services['pim_catalog.localization.presenter.datetime'] : $this->load(__DIR__.'/getPimCatalog_Localization_Presenter_DatetimeService.php')) && false ?: '_'});
