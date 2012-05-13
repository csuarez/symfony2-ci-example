<?php

namespace Csuarez\SimpleMathFrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CalculatorController extends Controller
{
    /**
     * @Route("/add/{a}/{b}/")
     * @Template()
     */
    public function addAction($a, $b)
    {
    	$c = $this->get('calculator')->add($a, $b);
        return array('a' => $a, 'b' => $b, 'c' => $c);
    }

    /**
     * @Route("/subtract/{a}/{b}/")
     * @Template()
     */
    public function subtractAction($a, $b)
    {
    	$c = $this->get('calculator')->subtract($a, $b);
        return array('a' => $a, 'b' => $b, 'c' => $c);
    }

    /**
     * @Route("/multiply/{a}/{b}/")
     * @Template()
     */
    public function multiplyAction($a, $b)
    {
    	$c = $this->get('calculator')->multiply($a, $b);
        return array('a' => $a, 'b' => $b, 'c' => $c);
    }

    /**
     * @Route("/divide/{a}/{b}/")
     * @Template()
     */
    public function divideAction($a, $b)
    {
    	$c = $this->get('calculator')->divide($a, $b);
        return array('a' => $a, 'b' => $b, 'c' => $c);
    }
}
