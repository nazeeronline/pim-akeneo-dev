<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.file.xlsx_category' shared service.

return $this->services['pim_connector.reader.file.xlsx_category'] = new \Akeneo\Tool\Component\Connector\Reader\File\Xlsx\Reader(${($_ = isset($this->services['pim_connector.reader.file.xlsx_iterator_factory']) ? $this->services['pim_connector.reader.file.xlsx_iterator_factory'] : $this->services['pim_connector.reader.file.xlsx_iterator_factory'] = new \Akeneo\Tool\Component\Connector\Reader\File\FileIteratorFactory('Akeneo\\Tool\\Component\\Connector\\Reader\\File\\FlatFileIterator', 'xlsx')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.array_converter.flat_to_standard.category']) ? $this->services['pim_connector.array_converter.flat_to_standard.category'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_FlatToStandard_CategoryService.php')) && false ?: '_'});
