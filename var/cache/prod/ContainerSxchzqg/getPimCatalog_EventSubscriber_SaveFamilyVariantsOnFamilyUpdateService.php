<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.event_subscriber.save_family_variants_on_family_update' shared service.

$a = ${($_ = isset($this->services['pim_catalog.saver.family_variant']) ? $this->services['pim_catalog.saver.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Saver_FamilyVariantService.php')) && false ?: '_'};

return $this->services['pim_catalog.event_subscriber.save_family_variants_on_family_update'] = new \Akeneo\Pim\Structure\Bundle\EventSubscriber\SaveFamilyVariantOnFamilyUpdateSubscriber(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load(__DIR__.'/getValidatorService.php')) && false ?: '_'}, $a, $a, ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});
