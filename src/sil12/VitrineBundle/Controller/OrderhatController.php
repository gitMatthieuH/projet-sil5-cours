<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sil12\VitrineBundle\Entity\Orderhat;
use sil12\VitrineBundle\Form\OrderhatType;

/**
 * Orderhat controller.
 *
 */
class OrderhatController extends Controller
{

    /**
     * Lists all Orderhat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('sil12VitrineBundle:Orderhat')->findAll();

        return $this->render('sil12VitrineBundle:Orderhat:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Orderhat entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Orderhat();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('orderhat_show', array('id' => $entity->getId())));
        }

        return $this->render('sil12VitrineBundle:Orderhat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Orderhat entity.
    *
    * @param Orderhat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Orderhat $entity)
    {
        $form = $this->createForm(new OrderhatType(), $entity, array(
            'action' => $this->generateUrl('orderhat_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Orderhat entity.
     *
     */
    public function newAction()
    {
        $entity = new Orderhat();
        $form   = $this->createCreateForm($entity);

        return $this->render('sil12VitrineBundle:Orderhat:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Orderhat entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sil12VitrineBundle:Orderhat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orderhat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sil12VitrineBundle:Orderhat:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Orderhat entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sil12VitrineBundle:Orderhat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orderhat entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sil12VitrineBundle:Orderhat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Orderhat entity.
    *
    * @param Orderhat $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Orderhat $entity)
    {
        $form = $this->createForm(new OrderhatType(), $entity, array(
            'action' => $this->generateUrl('orderhat_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Orderhat entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sil12VitrineBundle:Orderhat')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orderhat entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('orderhat_edit', array('id' => $id)));
        }

        return $this->render('sil12VitrineBundle:Orderhat:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Orderhat entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sil12VitrineBundle:Orderhat')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Orderhat entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('orderhat'));
    }

    /**
     * Creates a form to delete a Orderhat entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orderhat_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
