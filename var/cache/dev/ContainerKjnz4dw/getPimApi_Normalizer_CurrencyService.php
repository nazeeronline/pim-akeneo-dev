<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.normalizer.currency' shared service.

return $this->services['pim_api.normalizer.currency'] = new \Akeneo\Channel\Component\Normalizer\ExternalApi\CurrencyNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.standard.currency']) ? $this->services['pim_catalog.normalizer.standard.currency'] : $this->services['pim_catalog.normalizer.standard.currency'] = new \Akeneo\Channel\Component\Normalizer\Standard\CurrencyNormalizer()) && false ?: '_'});
