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
     * @Route("/", name="staffs_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $staffs = $em->getRepository('AppBundle:Staffs')->findAll();

        return $this->render('staffs/index.html.twig', array(
            'staffs' => $staffs,
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
