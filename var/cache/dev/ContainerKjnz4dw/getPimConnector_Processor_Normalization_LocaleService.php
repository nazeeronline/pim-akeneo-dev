<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.normalization.locale' shared service.

return $this->services['pim_connector.processor.normalization.locale'] = new \Akeneo\Tool\Component\Connector\Processor\Normalization\Processor(${($_ = isset($this->services['pim_catalog.normalizer.standard.locale']) ? $this->services['pim_catalog.normalizer.standard.locale'] : $this->services['pim_catalog.normalizer.standard.locale'] = new \Akeneo\Channel\Component\Normalizer\Standard\LocaleNormalizer()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});