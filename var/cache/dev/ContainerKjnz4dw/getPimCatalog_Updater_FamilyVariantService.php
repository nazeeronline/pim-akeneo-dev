<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.family_variant' shared service.

return $this->services['pim_catalog.updater.family_variant'] = new \Akeneo\Pim\Structure\Component\Updater\FamilyVariantUpdater(${($_ = isset($this->services['pim_catalog.factory.variant_attribute_set']) ? $this->services['pim_catalog.factory.variant_attribute_set'] : $this->services['pim_catalog.factory.variant_attribute_set'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\VariantAttributeSet')) && false ?: '_'}, ${($_ = isset($this->services['pim_structure.updater.translatable']) ? $this->services['pim_structure.updater.translatable'] : $this->services['pim_structure.updater.translatable'] = new \Akeneo\Tool\Component\Localization\TranslatableUpdater()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.family']) ? $this->services['pim_catalog.repository.family'] : $this->getPimCatalog_Repository_FamilyService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'});
