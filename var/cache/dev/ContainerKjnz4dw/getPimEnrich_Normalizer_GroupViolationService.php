<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.normalizer.group_violation' shared service.

return $this->services['pim_enrich.normalizer.group_violation'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\InternalApi\GroupViolationNormalizer(${($_ = isset($this->services['pim_internal_api_serializer']) ? $this->services['pim_internal_api_serializer'] : $this->load(__DIR__.'/getPimInternalApiSerializerService.php')) && false ?: '_'});