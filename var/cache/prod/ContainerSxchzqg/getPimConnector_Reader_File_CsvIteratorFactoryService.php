<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.file.csv_iterator_factory' shared service.

return $this->services['pim_connector.reader.file.csv_iterator_factory'] = new \Akeneo\Tool\Component\Connector\Reader\File\FileIteratorFactory('Akeneo\\Tool\\Component\\Connector\\Reader\\File\\FlatFileIterator', 'csv');
