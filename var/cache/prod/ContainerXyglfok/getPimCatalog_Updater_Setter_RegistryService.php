<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.setter.registry' shared service.

$this->services['pim_catalog.updater.setter.registry'] = $instance = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\SetterRegistry(${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'});

$a = ${($_ = isset($this->services['pim_catalog.builder.entity_with_values']) ? $this->services['pim_catalog.builder.entity_with_values'] : $this->load(__DIR__.'/getPimCatalog_Builder_EntityWithValuesService.php')) && false ?: '_'};

$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_text', 1 => 'pim_catalog_textarea', 2 => 'pim_catalog_identifier')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_metric')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_boolean')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_date')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_number')));
$instance->register(${($_ = isset($this->services['pim_catalog.updater.setter.association_field']) ? $this->services['pim_catalog.updater.setter.association_field'] : $this->load(__DIR__.'/getPimCatalog_Updater_Setter_AssociationFieldService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.updater.setter.category_field']) ? $this->services['pim_catalog.updater.setter.category_field'] : $this->load(__DIR__.'/getPimCatalog_Updater_Setter_CategoryFieldService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.updater.setter.group_field']) ? $this->services['pim_catalog.updater.setter.group_field'] : $this->load(__DIR__.'/getPimCatalog_Updater_Setter_GroupFieldService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.updater.setter.parent_field']) ? $this->services['pim_catalog.updater.setter.parent_field'] : $this->load(__DIR__.'/getPimCatalog_Updater_Setter_ParentFieldService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.updater.setter.family_field']) ? $this->services['pim_catalog.updater.setter.family_field'] : $this->load(__DIR__.'/getPimCatalog_Updater_Setter_FamilyFieldService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.updater.setter.enabled_field']) ? $this->services['pim_catalog.updater.setter.enabled_field'] : $this->services['pim_catalog.updater.setter.enabled_field'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\EnabledFieldSetter(array(0 => 'enabled'))) && false ?: '_'});
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_multiselect')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_price_collection')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_catalog_simpleselect')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\MediaAttributeSetter($a, ${($_ = isset($this->services['akeneo_file_storage.file_storage.file.file_storer']) ? $this->services['akeneo_file_storage.file_storage.file.file_storer'] : $this->load(__DIR__.'/getAkeneoFileStorage_FileStorage_File_FileStorerService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_file_storage.repository.file_info']) ? $this->services['akeneo_file_storage.repository.file_info'] : $this->load(__DIR__.'/getAkeneoFileStorage_Repository_FileInfoService.php')) && false ?: '_'}, array(0 => 'pim_catalog_file', 1 => 'pim_catalog_image')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_reference_data_simpleselect')));
$instance->register(new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AttributeSetter($a, array(0 => 'pim_reference_data_multiselect')));

return $instance;
