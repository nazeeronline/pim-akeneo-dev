<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.repository.client' shared service.

return $this->services['pim_enrich.repository.client'] = new \Oro\Bundle\PimDataGridBundle\Repository\ClientRepository(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->load(__DIR__.'/getFosOauthServer_EntityManagerService.php')) && false ?: '_'}, 'Akeneo\\Tool\\Bundle\\ApiBundle\\Entity\\Client');