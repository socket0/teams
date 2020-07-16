<?php


namespace Teams\Model;


use Interop\Container\ContainerInterface;
use Teams\Controller\TrashController;
use Zend\ServiceManager\Factory\FactoryInterface;

class TrashControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $trashController = new TrashController($services->get('Omeka\EntityManager'));
        return $trashController;
    }
}