<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.normalizer.product_association' shared service.

return $this->services['pim_datagrid.normalizer.product_association'] = new \Oro\Bundle\PimDataGridBundle\Normalizer\ProductAssociationNormalizer(${($_ = isset($this->services['pim_enrich.normalizer.image']) ? $this->services['pim_enrich.normalizer.image'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_ImageService.php')) && false ?: '_'});