<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_config.controller.configuration' shared service.

return $this->services['oro_config.controller.configuration'] = new \Oro\Bundle\ConfigBundle\Controller\Rest\ConfigurationController(${($_ = isset($this->services['oro_config.global']) ? $this->services['oro_config.global'] : $this->getOroConfig_GlobalService()) && false ?: '_'}, ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')))) && false ?: '_'}, '@PimUIBundle/Resources/config/loading_messages.txt', array(0 => array('section' => 'pim_ui', 'name' => 'language'), 1 => array('section' => 'pim_analytics', 'name' => 'version_update'), 2 => array('section' => 'pim_ui', 'name' => 'loading_message_enabled'), 3 => array('section' => 'pim_ui', 'name' => 'loading_messages')));
