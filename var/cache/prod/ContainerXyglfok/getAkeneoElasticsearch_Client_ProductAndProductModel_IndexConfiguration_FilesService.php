<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_elasticsearch.client.product_and_product_model.index_configuration.files' shared service.

return $this->services['akeneo_elasticsearch.client.product_and_product_model.index_configuration.files'] = new \Akeneo\Tool\Bundle\ElasticsearchBundle\IndexConfiguration\Loader($this->getParameter('elasticsearch_index_configuration_files'));