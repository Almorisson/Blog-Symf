<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Service\Greeting' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/Greeting.php';

return $this->services['App\\Service\\Greeting'] = new \App\Service\Greeting(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), 'Hello from service');
