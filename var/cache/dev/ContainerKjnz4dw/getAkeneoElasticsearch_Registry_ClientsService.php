<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_elasticsearch.registry.clients' shared service.

$this->services['akeneo_elasticsearch.registry.clients'] = $instance = new \Akeneo\Tool\Bundle\ElasticsearchBundle\ClientRegistry();

$instance->register(${($_ = isset($this->services['akeneo_elasticsearch.client.product']) ? $this->services['akeneo_elasticsearch.client.product'] : $this->getAkeneoElasticsearch_Client_ProductService()) && false ?: '_'});
$instance->register(${($_ = isset($this->services['akeneo_elasticsearch.client.product_model']) ? $this->services['akeneo_elasticsearch.client.product_model'] : $this->load(__DIR__.'/getAkeneoElasticsearch_Client_ProductModelService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['akeneo_elasticsearch.client.product_and_product_model']) ? $this->services['akeneo_elasticsearch.client.product_and_product_model'] : $this->load(__DIR__.'/getAkeneoElasticsearch_Client_ProductAndProductModelService.php')) && false ?: '_'});

return $instance;