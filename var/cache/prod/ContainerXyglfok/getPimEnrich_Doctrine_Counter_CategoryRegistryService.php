<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.doctrine.counter.category_registry' shared service.

$this->services['pim_enrich.doctrine.counter.category_registry'] = $instance = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Counter\CategoryItemsCounterRegistry();

$instance->register(${($_ = isset($this->services['pim_enrich.doctrine.counter.category_product']) ? $this->services['pim_enrich.doctrine.counter.category_product'] : $this->load(__DIR__.'/getPimEnrich_Doctrine_Counter_CategoryProductService.php')) && false ?: '_'}, 'product');

return $instance;
