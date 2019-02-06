<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.file.xlsx_product' shared service.

return $this->services['pim_connector.writer.file.xlsx_product'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Writer\File\Xlsx\ProductWriter(${($_ = isset($this->services['pim_connector.array_converter.standard_to_flat.product_localized']) ? $this->services['pim_connector.array_converter.standard_to_flat.product_localized'] : $this->load(__DIR__.'/getPimConnector_ArrayConverter_StandardToFlat_ProductLocalizedService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.factory.flat_item_buffer']) ? $this->services['pim_connector.factory.flat_item_buffer'] : $this->services['pim_connector.factory.flat_item_buffer'] = new \Akeneo\Tool\Component\Buffer\BufferFactory('Akeneo\\Tool\\Component\\Connector\\Writer\\File\\FlatItemBuffer')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.product.flat_item_buffer_flusher']) ? $this->services['pim_connector.writer.file.product.flat_item_buffer_flusher'] : $this->load(__DIR__.'/getPimConnector_Writer_File_Product_FlatItemBufferFlusherService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.media_exporter_path_generator']) ? $this->services['pim_connector.writer.file.media_exporter_path_generator'] : $this->services['pim_connector.writer.file.media_exporter_path_generator'] = new \Akeneo\Tool\Component\Connector\Writer\File\MediaExporterPathGenerator()) && false ?: '_'}, ${($_ = isset($this->services['akeneo.pim.enrichment.connector.write.file.flat.generate_headers_from_family_codes']) ? $this->services['akeneo.pim.enrichment.connector.write.file.flat.generate_headers_from_family_codes'] : $this->load(__DIR__.'/getAkeneo_Pim_Enrichment_Connector_Write_File_Flat_GenerateHeadersFromFamilyCodesService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo.pim.enrichment.connector.write.file.flat.generate_headers_from_attribute_codes']) ? $this->services['akeneo.pim.enrichment.connector.write.file.flat.generate_headers_from_attribute_codes'] : $this->load(__DIR__.'/getAkeneo_Pim_Enrichment_Connector_Write_File_Flat_GenerateHeadersFromAttributeCodesService.php')) && false ?: '_'}, array(0 => 'pim_catalog_file', 1 => 'pim_catalog_image'));
