<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo.pim.enrichment.connector.write.file.flat.generate_headers_from_family_codes' shared service.

return $this->services['akeneo.pim.enrichment.connector.write.file.flat.generate_headers_from_family_codes'] = new \Akeneo\Pim\Enrichment\Bundle\Storage\Sql\Connector\Writer\File\Flat\GenerateHeadersFromFamilyCodes(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'});