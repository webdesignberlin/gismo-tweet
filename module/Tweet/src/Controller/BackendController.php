<?php
 /**
 * FozbBlog 
 * 
 * @link http://github.com/fozb for the canonical source repository
 * @copyright Copyright (c) 2014 fozb
 */

namespace Tweet\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class BackendController
 */
class BackendController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel(array(
            'message' => 'Hello world',
        ));
    }
} 