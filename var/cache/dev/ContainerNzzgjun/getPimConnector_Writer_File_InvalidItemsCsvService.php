<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.file.invalid_items_csv' shared service.

return $this->services['pim_connector.writer.file.invalid_items_csv'] = new \Akeneo\Tool\Component\Connector\Writer\File\Csv\Writer(${($_ = isset($this->services['pim_connector.array_converter.dummy']) ? $this->services['pim_connector.array_converter.dummy'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_DummyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.factory.flat_item_buffer']) ? $this->services['pim_connector.factory.flat_item_buffer'] : $this->services['pim_connector.factory.flat_item_buffer'] = new \Akeneo\Tool\Component\Buffer\BufferFactory('Akeneo\\Tool\\Component\\Connector\\Writer\\File\\FlatItemBuffer')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.flat_invalid_item_buffer_flusher']) ? $this->services['pim_connector.writer.file.flat_invalid_item_buffer_flusher'] : $this->services['pim_connector.writer.file.flat_invalid_item_buffer_flusher'] = new \Akeneo\Tool\Component\Connector\Writer\File\FlatItemBufferFlusher()) && false ?: '_'});
