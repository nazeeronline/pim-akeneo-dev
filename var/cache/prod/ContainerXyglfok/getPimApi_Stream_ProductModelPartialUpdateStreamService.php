<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.stream.product_model_partial_update_stream' shared service.

return $this->services['pim_api.stream.product_model_partial_update_stream'] = new \Akeneo\Tool\Bundle\ApiBundle\Stream\StreamResourceResponse(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.validator.unique_value_set']) ? $this->services['pim_catalog.validator.unique_value_set'] : $this->services['pim_catalog.validator.unique_value_set'] = new \Akeneo\Pim\Enrichment\Component\Product\Validator\UniqueValuesSet()) && false ?: '_'}, $this->parameters['pim_api.configuration'], 'pim_api.controller.product_model:partialUpdateAction', 'code');
