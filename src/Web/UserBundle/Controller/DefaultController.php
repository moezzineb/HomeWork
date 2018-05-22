<?php

namespace Web\UserBundle\Controller;

use Doctrine\ORM\Query;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Web\UserBundle\Entity\User;


class DefaultController extends Controller
{
    public function indexAction(User $id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $usr=$em->getRepository('WebUserBundle:User')->find($id);
        return $this->render('WebUserBundle:Default:index.html.twig',array('usr' => $usr ));
    }
    public function freelancerAction(Request $request){
        $em=$this->getDoctrine()->getEntityManager();
        $free=$em->getRepository('WebUserBundle:User')->findBy(array('type' => 'Freelancer'));

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $free, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/);
        
        return $this->render('WebUserBundle:Default:freelancers.html.twig',array('free' => $pagination ));
    }

    public function searchAction(Request $request){
        $data = $request->get->all();
        $repo = $this->getDoctrine()
            ->getRepository('UserBundle:User');
        $query = $repo->createQueryBuilder('a')
            ->where('a.prenom LIKE :prenom')
            ->setParameter('prenom', '%'.$data['contactSearch'].'%')
            ->getQuery();
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query->getResults(),//get the results here
            $this->requrest->get('page',1),
            4
        );
        return $this->render('WebUserBundle:Default:freelancers.html.twig', array('free'=>$pagination));
    }

    public function dashAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $tt=$user->getId();
        $user = $this->getDoctrine()->getManager();
        $project = $user->getRepository('WebUserBundle:User')->findAll(array(),Query::HYDRATE_ARRAY);
        $a=array($tt);
        $em = $this->getDoctrine()->getEntityManager();
        $rs = $em->createQuery('SELECT p.idProjet 
        FROM WebProjectBundle:Projet p  
        WHERE p.idAbonne IN (:alo)
        AND p.statut IN (:s) 
        
        ');
        $rss = $em->createQuery('SELECT p.idProjet 
        FROM WebProjectBundle:Projet p  
        WHERE p.idAbonne IN (:alo)
        AND  p.statut IN (:s) 
        
        ');
        $rsss = $em->createQuery('SELECT p.idProjet 
        FROM WebProjectBundle:Projet p  
        WHERE p.idAbonne IN (:alo)
        AND p.statut IN (:s) 
        ');
        $rs->setParameter(':alo',implode(',' , $a));
        $rss->setParameter(':alo',implode(',' , $a));
        $rsss->setParameter(':alo',implode(',' , $a));

        $rs->setParameter(':s',array('debut'));
        $rss->setParameter(':s',array('travaille'));
        $rsss->setParameter(':s',array('fin'));
        /*$ss=implode(',',$project);
        print_r($ss);
        */
        $q=$rs->execute();
        $pro=$rss->execute();
        $fin=$rsss->execute();

        return $this->render('WebUserBundle:Dashboard:index.html.twig',array('rec'=>count($q),
            'pro'=>count($pro),
            'fin'=>count($fin)
        ));
    }
}
