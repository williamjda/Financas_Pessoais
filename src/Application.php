<?php
<<<<<<< HEAD
=======
/**
 * Created by PhpStorm.
 * User: William.Aquino
 * Date: 26/02/2018
 * Time: 13:32
 */
>>>>>>> desenvolvimento

namespace SONFin;


class Application
{
    private $serviceContainer;

<<<<<<< HEAD
    public function __construct(ServiceContainerInterface $serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    public function service($name){
        return $this->serviceContainer->get($name);
    }

    public function addService(string $name, $service){
        if(is_callable($service)){
            $this->serviceContainer->addLazy($name, $service);
        }else{
            $this->serviceContainer->add($name, $service);
        }
    }
=======
    public function service($name);
>>>>>>> desenvolvimento
}