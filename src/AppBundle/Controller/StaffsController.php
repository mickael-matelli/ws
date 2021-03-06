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
        $filterStaffs = new \AppBundle\Form\FilterStaffs();
        $staffRequest = new Staffs();
        $options = array('method'=>'GET');
        $form = $this->createForm($filterStaffs, $staffRequest, $options);
        $form->handleRequest($request);
        $query = $em->getRepository('AppBundle:Staffs')->getList($staffRequest);
        $paginator = $this->container->get('app.paginator');
        $paginator->setRoute('staffs_index');
        $paginator->setPage($page);
        $paginator->transformQuery($query);
        $staff = $paginator->getElement();
        $pagination = $paginator->getParameters();

        return $this->render('staffs/index.html.twig', array(
            'staffs' => $staff,
            'pagination'=>$pagination,
            'form'      =>$form->createView()
        ));
    }

    /**
     * Finds and displays a staff entity.
     *
     * @Route("/show/{id}",requirements={"id" = "\d+"},name="staffs_show")
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
		$parameterReq = $request->request->get('appbundle_staffs');
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if($form->isSubmitted()&&$form->isValid()){
			    $oStaff = $form->getData();
                $em->persist($oStaff);
                $em->flush();
                return $this->redirectToRoute('staffs_index');
            }
        }
        return $this->render('staffs/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
	
	/**
     *
     * @Route("/edit/{id}",requirements={"id" = "\d+"},name="staffs_edit")
     */
    public function editAction(\Symfony\Component\HttpFoundation\Request $request,Staffs $staff){
        $em = $this->getDoctrine()->getManager();
        $staffType = new \AppBundle\Form\StaffsType();
        $options = array();
        $form = $this->createForm($staffType, $staff, $options);
		$parameterReq = $request->request->get('appbundle_staffs');
        if($request->getMethod() == "POST"){
            $form->handleRequest($request);
            if($form->isSubmitted()&&$form->isValid()){
				$oStaff = $form->getData();
                $em->persist($oStaff);
                $em->flush();
                return $this->redirectToRoute('staffs_index');
            }
        }
        return $this->render('staffs/edit.html.twig', array(
            'form' => $form->createView(),
			'id'   => $staff->getId()
        ));
    }
}
