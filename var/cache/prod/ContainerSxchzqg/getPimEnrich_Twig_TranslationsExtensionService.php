<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.twig.translations_extension' shared service.

return $this->services['pim_enrich.twig.translations_extension'] = new \Akeneo\Platform\Bundle\UIBundle\Twig\TranslationsExtension(${($_ = isset($this->services['pim_catalog.command_launcher']) ? $this->services['pim_catalog.command_launcher'] : $this->services['pim_catalog.command_launcher'] = new \Akeneo\Tool\Component\Console\CommandLauncher(($this->targetDirs[3].'/app'), 'prod', ($this->targetDirs[2].'/logs'))) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ($this->targetDirs[3].'/app/../web'));
