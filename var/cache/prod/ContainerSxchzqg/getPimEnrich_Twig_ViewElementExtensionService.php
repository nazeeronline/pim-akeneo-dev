<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.twig.view_element_extension' shared service.

$a = ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load(__DIR__.'/getTemplatingService.php')) && false ?: '_'};

if (isset($this->services['pim_enrich.twig.view_element_extension'])) {
    return $this->services['pim_enrich.twig.view_element_extension'];
}

return $this->services['pim_enrich.twig.view_element_extension'] = new \Akeneo\Platform\Bundle\UIBundle\Twig\ViewElementExtension(${($_ = isset($this->services['pim_enrich.view_element.registry']) ? $this->services['pim_enrich.view_element.registry'] : $this->load(__DIR__.'/getPimEnrich_ViewElement_RegistryService.php')) && false ?: '_'}, $a, false);
