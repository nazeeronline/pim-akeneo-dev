<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.form.type.available_attributes' shared service.

return $this->services['pim_enrich.form.type.available_attributes'] = new \Akeneo\Pim\Structure\Bundle\Form\Type\AvailableAttributesType(${($_ = isset($this->services['pim_enrich.repository.attribute']) ? $this->services['pim_enrich.repository.attribute'] : $this->load(__DIR__.'/getPimEnrich_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, 'Akeneo\\Pim\\Structure\\Component\\Model\\Attribute', 'Akeneo\\Pim\\Structure\\Component\\Model\\AvailableAttributes');
