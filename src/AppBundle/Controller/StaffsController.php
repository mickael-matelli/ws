<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Staffs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Staff controller.
 *
 * @Route("staffs")
 */
class StaffsController extends Controller
{
    /**
     * Lists all staff entities.
     *
     * @Route("/{page}",requirements={"page" = "\d+"},defaults={"page" = 1},name="staffs_index")
     * @Method("GET")
     */
    public function indexAction(\Symfony\Component\HttpFoundation\Request $request,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $maxArticles = $this->container->getParameter('max_articles_per_page');
        $filterStaffs = new \AppBundle\Form\FilterStaffs();
        $staffRequest = new Staffs();
        $options = array('method'=>'GET');
        $form = $this->createForm($filterStaffs, $staffRequest, $options);
        $form->handleRequest($request);
        $staffs_count = $em->getRepository('AppBundle:Staffs')->count($staffRequest);
        $pagination = array(
            'page' => $page,
            'route' => 'staffs_index',
            'pages_count' => ceil($staffs_count / $maxArticles),
            'route_params' => array()
        );
        $staffs = $em->getRepository('AppBundle:Staffs')->getList($staffRequest,$page,$maxArticles);
        
        return $this->render('staffs/index.html.twig', array(
            'staffs' => $staffs,
            'pagination'=>$pagination,
            'form'      =>$form->createView()
        ));
    }

    /**
     * Finds and displays a staff entity.
     *
     * @Route("/{id}",requirements={"id" = "\d+"},name="staffs_show")
     * @Method("GET")
     */
    public function showAction(Staffs $staff)
    {   
        return $this->render('staffs/show.html.twig', array(
            'staff' => $staff,
        ));
    }
    
    /**
     *
     * @Route("/new", name="staffs_new")
     */
    public function newAction(\Symfony\Component\HttpFoundation\Request $request){
        $em = $this->getDoctrine()->getManager();
        $staffType = new \AppBundle\Form\StaffsType();
        $staffRequest = new Staffs();
        $options = array();
        $form = $this->createForm($staffType, $staffRequest, $options);
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if($form->isSubmitted()&&$form->isValid()){
                $em->persist($form->getData());
                $em->flush();
                return $this->redirectToRoute('staffs_index');
            }
        }
        return $this->render('staffs/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
