<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.view_element.visibility_checker.voter' shared service.

return $this->services['pim_enrich.view_element.visibility_checker.voter'] = new \Akeneo\Platform\Bundle\UIBundle\ViewElement\Checker\VoterVisibilityChecker(${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'});
