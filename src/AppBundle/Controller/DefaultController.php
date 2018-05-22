<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $email = $request->get('email');
        $objet = $request->get('object');
        $text = $request->get('text');

        $message = \Swift_Message::newInstance()
            ->setSubject($objet)
            ->setFrom($email)
            ->setTo('moezmix@gmail.com')
            ->setBody($text);
        $this->get('mailer')->send($message);

        return $this->render('default/index.html.twig');
    }
}
