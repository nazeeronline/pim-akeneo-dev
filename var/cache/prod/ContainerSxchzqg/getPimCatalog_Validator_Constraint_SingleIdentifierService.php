<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.validator.constraint.single_identifier' shared service.

return $this->services['pim_catalog.validator.constraint.single_identifier'] = new \Akeneo\Pim\Structure\Component\Validator\Constraints\SingleIdentifierAttributeValidator(${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'});
