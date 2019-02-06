<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.file.csv_attribute_option' shared service.

return $this->services['pim_connector.writer.file.csv_attribute_option'] = new \Akeneo\Tool\Component\Connector\Writer\File\Csv\Writer(${($_ = isset($this->services['pim_connector.array_converter.standard_to_flat.attribute_option']) ? $this->services['pim_connector.array_converter.standard_to_flat.attribute_option'] : $this->services['pim_connector.array_converter.standard_to_flat.attribute_option'] = new \Akeneo\Pim\Structure\Component\ArrayConverter\StandardToFlat\AttributeOption()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.factory.flat_item_buffer']) ? $this->services['pim_connector.factory.flat_item_buffer'] : $this->services['pim_connector.factory.flat_item_buffer'] = new \Akeneo\Tool\Component\Buffer\BufferFactory('Akeneo\\Tool\\Component\\Connector\\Writer\\File\\FlatItemBuffer')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.flat_item_buffer_flusher']) ? $this->services['pim_connector.writer.file.flat_item_buffer_flusher'] : $this->load(__DIR__.'/getPimConnector_Writer_File_FlatItemBufferFlusherService.php')) && false ?: '_'});
