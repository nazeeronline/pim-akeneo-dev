<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_security.twig.security_extension' shared service.

return $this->services['oro_security.twig.security_extension'] = new \Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension(${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'});
