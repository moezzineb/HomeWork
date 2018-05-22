<?php

namespace Web\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;
use Web\ProjectBundle\Entity\Projet;
use Web\ProjectBundle\Entity\Offre;
use Web\UserBundle\Entity\User;
use Web\ProjectBundle\Form\ProjetType;
use Web\ProjectBundle\Form\OffreType;
use Symfony\Component\Form\Extension\HttpFoundation;



class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $project = new Projet();
        $form = $this->createForm(new ProjetType(), $project);
        $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $project->setIdAbonne($user);
            $project->setStatut('debut');
            $project->setDateDebut(new \DateTime("now"));
            $form->handleRequest($request);
            if ($form->isValid()){
                $em->persist($project);
                $em->flush();
            }
            return $this->redirectToRoute('web_projects_homepage');
        }

        return $this->render('WebProjectBundle:Default:index.html.twig',array(
                'form' => $form->createView()
            )
        );
    }
    public function editAction($idProjet){
        //$user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('WebProjectBundle:Projet')->find($idProjet);
        $offre = $em->getRepository('WebProjectBundle:Offre')->findby(array('idProjet' => $idProjet));
        $form = $this->createForm(new ProjetType(), $project);
        $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $freelancer=$request->get('freelancer');
            $project->setFreelancer($freelancer);
            $form->handleRequest($request);
            if ($form->isValid()){
                $em->flush();
            }
            return $this->redirectToRoute('web_projects_homepage');
        }

        return $this->render('WebProjectBundle:Default:edit.html.twig',array(
                'form' => $form->createView(),
                'offre' => $offre
            )
        );
    }
    public function projectsAction(Request $request){
        $em=$this->getDoctrine()->getEntityManager();
        $pro=$em->getRepository('WebProjectBundle:Projet')->findBy(array('statut' => 'debut'),array('idProjet' => 'desc'));

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM WebProjectBundle:Projet a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $pro, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/);

        return $this->render('WebProjectBundle:Default:projects.html.twig',array(
            'pr' => $pagination,
            'xx' => count($pro)
        ));
    }
    public function postAction(Projet $idProjet,Request $request){
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em=$this->getDoctrine()->getEntityManager();
        $repo=$em->getRepository('WebProjectBundle:Offre')->findBy(array('idProjet' => $idProjet));
        $test = $em->getRepository('WebProjectBundle:Projet')->find($idProjet);
        $xx = $test->getFreelancer();
        $free = $em->getRepository('WebUserBundle:User')->findOneBy(array('username' => $xx));


        //$user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $offre = new Offre();
        $form = $this->createForm(new OffreType(), $offre);
        $request=$this->getRequest();
        if ($request->getMethod()=='POST'){
            $offre->setIdAbonne($user);
            $offre->setIdProjet($test);
            $offre->setDateOffre(new \DateTime("now"));
            $offre->setStatus('waiting');
            $form->handleRequest($request);
            if ($form->isValid()){
                $em->persist($offre);
                $em->flush();
            }
        }


        return $this->render('WebProjectBundle:Default:post.html.twig',array(
            'form' => $form->createView(),
            'projet' => $repo,
            'test' => $test,
            'count' => count($repo),
            'free' => $free
        ));
    }
    public function activityAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $usr=$user->getId();
        $em=$this->getDoctrine()->getEntityManager();
        $mypr=$em->getRepository('WebProjectBundle:Projet')->findBy(array('idAbonne' => $user));

        $query=$em->createQuery('
            SELECT p
            FROM WebProjectBundle:Projet p , WebProjectBundle:Offre o
            WHERE p.idProjet = o.idProjet
            AND o.idAbonne IN (:id)
        ');
        $query->setParameter(':id',$usr);
        $xx=$query->execute();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $mypr, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/);

        $paginator  = $this->get('knp_paginator');
        $pagination1 = $paginator->paginate(
            $xx, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/);
        
        return $this->render('WebProjectBundle:Default:activity.html.twig',array(
            'mypro' => $pagination,
            'cnt' => count($mypr),
            'pass' => $pagination1,
            'count' => count($xx)
        ));
    }
}
