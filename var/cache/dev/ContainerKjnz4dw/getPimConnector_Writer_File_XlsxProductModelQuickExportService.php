<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.file.xlsx_product_model_quick_export' shared service.

return $this->services['pim_connector.writer.file.xlsx_product_model_quick_export'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Writer\File\Xlsx\ProductModelWriter(${($_ = isset($this->services['pim_connector.array_converter.standard_to_flat.product_model_localized']) ? $this->services['pim_connector.array_converter.standard_to_flat.product_model_localized'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_StandardToFlat_ProductModelLocalizedService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.factory.flat_item_buffer']) ? $this->services['pim_connector.factory.flat_item_buffer'] : $this->services['pim_connector.factory.flat_item_buffer'] = new \Akeneo\Tool\Component\Buffer\BufferFactory('Akeneo\\Tool\\Component\\Connector\\Writer\\File\\FlatItemBuffer')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.product_model_quick_export.flat_item_buffer_flusher']) ? $this->services['pim_connector.writer.file.product_model_quick_export.flat_item_buffer_flusher'] : $this->load(__DIR__.'/getPimConnector_Writer_File_ProductModelQuickExport_FlatItemBufferFlusherService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.media_exporter_path_generator']) ? $this->services['pim_connector.writer.file.media_exporter_path_generator'] : $this->services['pim_connector.writer.file.media_exporter_path_generator'] = new \Akeneo\Tool\Component\Connector\Writer\File\MediaExporterPathGenerator()) && false ?: '_'}, array(0 => 'pim_catalog_file', 1 => 'pim_catalog_image'), 'filePathProductModel');
