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
     * @Route("/{id}", name="staffs_show")
     * @Method("GET")
     */
    public function showAction(Staffs $staff)
    {

        return $this->render('staffs/show.html.twig', array(
            'staff' => $staff,
        ));
    }
}
