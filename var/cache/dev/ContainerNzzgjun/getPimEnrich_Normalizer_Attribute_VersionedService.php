<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.normalizer.attribute.versioned' shared service.

return $this->services['pim_enrich.normalizer.attribute.versioned'] = new \Akeneo\Pim\Structure\Component\Normalizer\InternalApi\VersionedAttributeNormalizer(${($_ = isset($this->services['pim_enrich.normalizer.attribute']) ? $this->services['pim_enrich.normalizer.attribute'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_versioning.manager.version']) ? $this->services['pim_versioning.manager.version'] : $this->load(__DIR__.'/getPimVersioning_Manager_VersionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.version']) ? $this->services['pim_enrich.normalizer.version'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_VersionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_structure_version.provider.structure_version.attribute']) ? $this->services['pim_structure_version.provider.structure_version.attribute'] : $this->load(__DIR__.'/getPimStructureVersion_Provider_StructureVersion_AttributeService.php')) && false ?: '_'});