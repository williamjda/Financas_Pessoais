<?php


declare(strict_types=1);
namespace SONFin;

use SONFin\Plugins\PluginInterface;

class Application
{
    private $serviceContainer;

<<<<<<< HEAD

=======
>>>>>>> desenvolvimento
    public function __construct(ServiceContainerInterface $serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    public function service($name){
        return $this->serviceContainer->get($name);
    }

<<<<<<< HEAD
    public function addService(string $name, $service){
=======
    public function addService(string $name, $service): void
    {
>>>>>>> desenvolvimento
        if(is_callable($service)){
            $this->serviceContainer->addLazy($name, $service);
        }else{
            $this->serviceContainer->add($name, $service);
        }
    }
<<<<<<< HEAD
=======

    public function plugin(PluginInterface $plugin): void
    {
        $plugin->register($this->serviceContainer);
    }

>>>>>>> desenvolvimento
}