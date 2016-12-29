<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Purchase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Purchase controller.
 *
 * @Route("purchase")
 */
class PurchaseController extends Controller
{
    /**
     * Lists all purchase entities.
     *
     * @Route("/list", name="purchase_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $purchases = $em->getRepository('AppBundle:Purchase')->findAll();

        return $this->render('purchase/index.html.twig', array(
            'purchases' => $purchases,
        ));
    }

    /**
     * Creates a new purchase entity.
     *
     * @Route("/new", name="purchase_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $purchase = new Purchase();
        $form = $this->createForm('AppBundle\Form\PurchaseType', $purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($purchase);
            $em->flush($purchase);

            return $this->redirectToRoute('purchase_index');
        }

        return $this->render('purchase/new.html.twig', array(
            'purchase' => $purchase,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a purchase entity.
     *
     * @Route("/{id}/show", name="purchase_show")
     * @Method("GET")
     */
    public function showAction(Purchase $purchase)
    {
        $deleteForm = $this->createDeleteForm($purchase);

        return $this->render('purchase/show.html.twig', array(
            'purchase' => $purchase,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing purchase entity.
     *
     * @Route("/{id}/edit", name="purchase_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Purchase $purchase)
    {
        $editForm = $this->createForm('AppBundle\Form\PurchaseType', $purchase);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('purchase_index');
        }

        return $this->render('purchase/edit.html.twig', array(
            'purchase' => $purchase,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a purchase entity.
     *
     * @Route("/{id}/delete", name="purchase_delete")
     */
    public function deleteAction(Request $request, Purchase $purchase)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($purchase);
        $em->flush($purchase);
        return $this->redirectToRoute('purchase_index');
    }

    /**
     * Creates a form to delete a purchase entity.
     *
     * @param Purchase $purchase The purchase entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Purchase $purchase)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('purchase_delete', array('id' => $purchase->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
