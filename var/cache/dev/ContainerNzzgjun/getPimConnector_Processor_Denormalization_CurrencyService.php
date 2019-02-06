<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.denormalization.currency' shared service.

return $this->services['pim_connector.processor.denormalization.currency'] = new \Akeneo\Tool\Component\Connector\Processor\Denormalization\Processor(${($_ = isset($this->services['pim_catalog.repository.currency']) ? $this->services['pim_catalog.repository.currency'] : $this->getPimCatalog_Repository_CurrencyService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.currency']) ? $this->services['pim_catalog.factory.currency'] : $this->services['pim_catalog.factory.currency'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Channel\\Component\\Model\\Currency')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.currency']) ? $this->services['pim_catalog.updater.currency'] : $this->services['pim_catalog.updater.currency'] = new \Akeneo\Channel\Component\Updater\CurrencyUpdater()) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});
