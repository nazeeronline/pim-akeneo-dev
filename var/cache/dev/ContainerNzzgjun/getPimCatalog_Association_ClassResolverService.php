<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.association.class_resolver' shared service.

return $this->services['pim_catalog.association.class_resolver'] = new \Akeneo\Pim\Enrichment\Component\Product\Association\AssociationClassResolver(array('Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductInterface' => 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductAssociation', 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModelInterface' => 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModelAssociation'));