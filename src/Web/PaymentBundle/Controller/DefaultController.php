<?php

namespace Web\PaymentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebPaymentBundle:Default:index.html.twig');
    }
}
