<?php

namespace Web\MessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation;
use Web\MessageBundle\Entity\Message;
use Web\MessageBundle\Form\MessageType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $rec=$request->get('recepteur');
        $obj=$request->get('objet');
        $msg=$request->get('message');

        $message = \Swift_Message::newInstance()
            ->setSubject($obj)
            ->setFrom(array('moezmix@gmail.com' => 'HomeWork Administration'))
            ->setTo($rec)
            ->setBody($msg);
        $this->get('mailer')->send($message);
        
        $message = new Message();
        //$request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $message->setRecepteur($rec);
            $message->setObjet($obj);
            $message->setDescription($msg);
            $message->setDate(new \DateTime("now"));
            $message->setIdAbonne($user);
            $em=$this->getDoctrine()->getEntityManager();
            $em->persist($message);
            $em->flush();
            if ($message){
                return $this->redirectToRoute('web_dashboard');
            }else{
                return $this->redirectToRoute('email_compose');
            }


        }
        
        return $this->render('WebMessageBundle:Default:index.html.twig');
    }
}
