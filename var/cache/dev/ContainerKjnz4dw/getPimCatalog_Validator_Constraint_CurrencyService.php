<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.validator.constraint.currency' shared service.

return $this->services['pim_catalog.validator.constraint.currency'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\Constraints\CurrencyValidator(${($_ = isset($this->services['pim_catalog.repository.currency']) ? $this->services['pim_catalog.repository.currency'] : $this->getPimCatalog_Repository_CurrencyService()) && false ?: '_'});
