<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.file.csv_attribute' shared service.

return $this->services['pim_connector.reader.file.csv_attribute'] = new \Akeneo\Tool\Component\Connector\Reader\File\Csv\Reader(${($_ = isset($this->services['pim_connector.reader.file.csv_iterator_factory']) ? $this->services['pim_connector.reader.file.csv_iterator_factory'] : $this->services['pim_connector.reader.file.csv_iterator_factory'] = new \Akeneo\Tool\Component\Connector\Reader\File\FileIteratorFactory('Akeneo\\Tool\\Component\\Connector\\Reader\\File\\FlatFileIterator', 'csv')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.attribute']) ? $this->services['pim_connector.array_converter.flat_to_standard.attribute'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_FlatToStandard_AttributeService.php')) && false ?: '_'});
