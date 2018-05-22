<?php

namespace Web\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\HttpFoundation;
use Symfony\Component\HttpFoundation\Request;
use Web\PortfolioBundle\Entity\Portfolio;
use Web\PortfolioBundle\Form\PortfolioType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $portfolio = new Portfolio();
        $form = $this->createForm(new PortfolioType(), $portfolio);
        $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $portfolio->setIdAbonne($user);
            $form->handleRequest($request);
            if ($form->isValid()){
                $em->persist($portfolio);
                $em->flush();
            }
            return $this->redirectToRoute('web_projects_homepage');
        }
        
        return $this->render('WebPortfolioBundle:Default:index.html.twig',array(
            'form' => $form->createView()
        ));
    }
    public function portfoliosAction(Request $request){
        $em=$this->getDoctrine()->getEntityManager();
        $por=$em->getRepository('WebPortfolioBundle:Portfolio')->findAll();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $por, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            1/*limit per page*/);
        
        return $this->render('WebPortfolioBundle:Default:portfolios.html.twig',array(
            'portf' => $pagination
        ));
    }
    public function postAction(Portfolio $idPortfolio,Request $request){
        $em=$this->getDoctrine()->getEntityManager();
        $por=$em->getRepository('WebPortfolioBundle:Portfolio')->find($idPortfolio);
        return $this->render('WebPortfolioBundle:Default:post.html.twig',array('test' => $por));
    }
}
