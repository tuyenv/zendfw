<?php
namespace Application\Factory\Controller;

use Application\Controller\IndexController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $serviceOne = $realServiceLocator->get('Application\Service\ServiceOne');
        $serviceTwo = $realServiceLocator->get('Application\Service\ServiceTwo');
        return new IndexController($serviceOne, $serviceTwo);
    }

}
