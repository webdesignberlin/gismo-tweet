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
 * Class IndexController
 * @package Tweet\Controller
 */
class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel(array(
            'message' => 'Hello world',
        ));
    }

    /**
     *
     */
    public function hashTagAction()
    {
        return new ViewModel(array(
            'message' => 'Hello world',
        ));
    }
} 