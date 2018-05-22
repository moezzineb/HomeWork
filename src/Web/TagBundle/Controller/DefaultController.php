<?php

namespace Web\TagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Web\TagBundle\Entity\Skill;
use Web\UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getEntityManager();
        $pro=$em->getRepository('WebTagBundle:Skill')->findBy(array('idAbonne' => $user));
        if($request->getMethod()=='POST'){

            $name=$request->get('aa');

            $tag = new Skill($user);
            $tag->setName($name);
            $tag->setIdAbonne($user);

            $em=$this->getDoctrine()->getEntityManager();
            $em->persist($tag);
            $em->flush();

            if ($tag) {
                return $this->render('WebUserBundle:Profile:show_content.html.twig');
            }else{
                return $this->render('WebUserBundle:ChangePassword:changePassword_content.html.twig');
            }
        }
        return $this->render('WebTagBundle:Default:index.html.twig',array('pro' => $pro));
    }
}
