<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.normalizer.attribute_option' shared service.

return $this->services['pim_enrich.normalizer.attribute_option'] = new \Akeneo\Pim\Structure\Component\Normalizer\InternalApi\AttributeOptionNormalizer(${($_ = isset($this->services['pim_catalog.repository.locale']) ? $this->services['pim_catalog.repository.locale'] : $this->getPimCatalog_Repository_LocaleService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.attribute_option_value']) ? $this->services['pim_catalog.factory.attribute_option_value'] : $this->services['pim_catalog.factory.attribute_option_value'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\AttributeOptionValue')) && false ?: '_'});