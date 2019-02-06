<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.normalizer.storage_with_standard_format.product.product_value' shared service.

if ($lazyLoad) {
    return $this->services['pim_catalog.normalizer.storage_with_standard_format.product.product_value'] = $this->createProxy('ProductValueNormalizer_e3294eb', function () {
        return \ProductValueNormalizer_e3294eb::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load(__DIR__.'/getPimCatalog_Normalizer_StorageWithStandardFormat_Product_ProductValueService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ProductValueNormalizer(${($_ = isset($this->services['pim_storage_serializer']) ? $this->services['pim_storage_serializer'] : $this->load(__DIR__.'/getPimStorageSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'});
