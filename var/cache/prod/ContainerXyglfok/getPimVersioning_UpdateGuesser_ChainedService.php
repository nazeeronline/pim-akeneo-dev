<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_versioning.update_guesser.chained' shared service.

$this->services['pim_versioning.update_guesser.chained'] = $instance = new \Akeneo\Tool\Bundle\VersioningBundle\UpdateGuesser\ChainedUpdateGuesser();

$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.attribute_group']) ? $this->services['pim_versioning.update_guesser.attribute_group'] : $this->services['pim_versioning.update_guesser.attribute_group'] = new \Akeneo\Tool\Bundle\VersioningBundle\UpdateGuesser\AttributeGroupUpdateGuesser()) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.locale_specific_attribute']) ? $this->services['pim_versioning.update_guesser.locale_specific_attribute'] : $this->services['pim_versioning.update_guesser.locale_specific_attribute'] = new \Akeneo\Tool\Bundle\VersioningBundle\UpdateGuesser\LocaleSpecificAttributeUpdateGuesser()) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.attribute_option']) ? $this->services['pim_versioning.update_guesser.attribute_option'] : $this->services['pim_versioning.update_guesser.attribute_option'] = new \Akeneo\Tool\Bundle\VersioningBundle\UpdateGuesser\AttributeOptionUpdateGuesser()) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.contains_products']) ? $this->services['pim_versioning.update_guesser.contains_products'] : $this->services['pim_versioning.update_guesser.contains_products'] = new \Akeneo\Tool\Bundle\VersioningBundle\UpdateGuesser\ContainsProductsUpdateGuesser()) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.association']) ? $this->services['pim_versioning.update_guesser.association'] : $this->services['pim_versioning.update_guesser.association'] = new \Akeneo\Tool\Bundle\VersioningBundle\UpdateGuesser\AssociationUpdateGuesser()) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.translations']) ? $this->services['pim_versioning.update_guesser.translations'] : $this->load(__DIR__.'/getPimVersioning_UpdateGuesser_TranslationsService.php')) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.versionable']) ? $this->services['pim_versioning.update_guesser.versionable'] : $this->load(__DIR__.'/getPimVersioning_UpdateGuesser_VersionableService.php')) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.associations']) ? $this->services['pim_versioning.update_guesser.associations'] : $this->load(__DIR__.'/getPimVersioning_UpdateGuesser_AssociationsService.php')) && false ?: '_'});
$instance->addUpdateGuesser(${($_ = isset($this->services['pim_versioning.update_guesser.family_attribute_requirement']) ? $this->services['pim_versioning.update_guesser.family_attribute_requirement'] : $this->services['pim_versioning.update_guesser.family_attribute_requirement'] = new \Akeneo\Tool\Bundle\VersioningBundle\UpdateGuesser\FamilyAttributeRequirementUpdateGuesser()) && false ?: '_'});

return $instance;