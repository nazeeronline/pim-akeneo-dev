<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.association_type' shared service.

return $this->services['pim_catalog.updater.association_type'] = new \Akeneo\Pim\Structure\Component\Updater\AssociationTypeUpdater(${($_ = isset($this->services['pim_structure.updater.translatable']) ? $this->services['pim_structure.updater.translatable'] : $this->services['pim_structure.updater.translatable'] = new \Akeneo\Tool\Component\Localization\TranslatableUpdater()) && false ?: '_'});
