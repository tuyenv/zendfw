<?php
namespace  Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

Class ExpController extends AbstractActionControllert
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
