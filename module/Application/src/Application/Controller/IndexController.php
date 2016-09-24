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

class IndexController extends AbstractActionController
{
    public $serviceOne;

    public function __construct(ServiceOne $serviceOne)
    {
        $this->serviceOne = $serviceOne;
    }

    public function indexAction()
    {
        $this->serviceOne->IamOne();
        return new ViewModel();
    }
}
