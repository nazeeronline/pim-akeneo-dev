<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_ui.twig.date_extension' shared service.

return $this->services['pim_ui.twig.date_extension'] = new \Akeneo\Platform\Bundle\UIBundle\Twig\DateExtension(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});