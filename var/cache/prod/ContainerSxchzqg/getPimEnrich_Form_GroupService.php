<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.form.group' shared service.

return $this->services['pim_enrich.form.group'] = ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}->createNamed('pim_enrich_group_form', 'Akeneo\\Pim\\Enrichment\\Bundle\\Form\\Type\\GroupType');
