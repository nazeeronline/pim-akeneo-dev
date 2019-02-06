<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.normalizer.standard.product.properties' shared service.

if ($lazyLoad) {
    return $this->services['pim_catalog.normalizer.standard.product.properties'] = $this->createProxy('PropertiesNormalizer_f2b5d5d', function () {
        return \PropertiesNormalizer_f2b5d5d::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_Product_PropertiesService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\PropertiesNormalizer(${($_ = isset($this->services['pim_catalog.filter.chained']) ? $this->services['pim_catalog.filter.chained'] : $this->load(__DIR__.'/getPimCatalog_Filter_ChainedService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_standard_format_serializer']) ? $this->services['pim_standard_format_serializer'] : $this->load(__DIR__.'/getPimStandardFormatSerializerService.php')) && false ?: '_'});
