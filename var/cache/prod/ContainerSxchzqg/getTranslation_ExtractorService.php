<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.extractor' shared service.

$this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

$instance->addExtractor('php', ${($_ = isset($this->services['translation.extractor.php']) ? $this->services['translation.extractor.php'] : $this->services['translation.extractor.php'] = new \Symfony\Component\Translation\Extractor\PhpExtractor()) && false ?: '_'});
$instance->addExtractor('twig', ${($_ = isset($this->services['twig.translation.extractor']) ? $this->services['twig.translation.extractor'] : $this->load(__DIR__.'/getTwig_Translation_ExtractorService.php')) && false ?: '_'});

return $instance;
