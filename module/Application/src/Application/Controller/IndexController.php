<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Service\ServiceOne;
use Application\Service\ServiceTwo;

class IndexController extends AbstractActionController
{
    public $serviceOne;
    public $serviceTwo;

    public function __construct(
        ServiceOne $serviceOne,
        ServiceTwo $serviceTwo
    ) {
        $this->serviceOne = $serviceOne;
        $this->serviceTwo = $serviceTwo;
    }

    public function indexAction()
    {
        $serviceTwo = new ServiceTwo();
        $serviceTwo->IamService();


        $this->serviceTwo->IamService();
        $this->serviceOne->IamService();
        return new ViewModel();
    }
}
