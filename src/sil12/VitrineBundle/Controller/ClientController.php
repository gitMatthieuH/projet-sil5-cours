<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use sil12\VitrineBundle\Entity\Client;
use sil12\VitrineBundle\Form\ClientType;
use sil12\VitrineBundle\Form\LoginType;

/**
 * Client controller.
 *
 */
class ClientController extends Controller
{

    /**
     * Lists all Client entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sil12VitrineBundle:Client')->findAll();

        return $this->render('sil12VitrineBundle:Client:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Client entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Client();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $session = $this->getRequest()->getSession();
            $session->set('id_client', $entity->getId());

            return $this->redirect($this->generateUrl('client_show', array('id' => $entity->getId())));
        }

        return $this->render('sil12VitrineBundle:Client:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Client entity.
    *
    * @param Client $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Client $entity)
    {
        $form = $this->createForm(new ClientType(), $entity, array(
            'action' => $this->generateUrl('client_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Client entity.
     *
     */
    public function newAction()
    {
        $entity = new Client();
        $form   = $this->createCreateForm($entity);

        return $this->render('sil12VitrineBundle:Client:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Client entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sil12VitrineBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sil12VitrineBundle:Client:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Client entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sil12VitrineBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sil12VitrineBundle:Client:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Client entity.
    *
    * @param Client $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Client $entity)
    {
        $form = $this->createForm(new ClientType(), $entity, array(
            'action' => $this->generateUrl('client_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Client entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sil12VitrineBundle:Client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('client_edit', array('id' => $id)));
        }

        return $this->render('sil12VitrineBundle:Client:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Client entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sil12VitrineBundle:Client')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Client entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('client'));
    }

    /**
     * Creates a form to delete a Client entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('client_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    private function createLoginForm(Client $entity)
    {
        $form = $this->createForm(new LoginType(), $entity, array(
            'action' => $this->generateUrl('client_login'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'login'));

        return $form;
    }

    public function authAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        /*$session = $this->getRequest()->getSession();
        $session->clear();*/

        $entity = new Client();
        $loginForm = $this->createLoginForm($entity);
        $loginForm->handleRequest($request);

        

        /*if (!$client) {
            throw $this->createNotFoundException('Unable to find Client entity.');
        }
*/

       // && $client->getPassword() == $entity->getPassword()

        if ($loginForm->isValid() ) {
            $client = $em->getRepository('sil12VitrineBundle:Client')->findOneByName($entity->getName());


            if ($client->getPassword() == $entity->getPassword())
                return $this->redirect($this->generateUrl('sil12_vitrine_accueil'));
        }


        return $this->render('sil12VitrineBundle:Default:auth.html.twig', array(
            'entity' => $entity,
            'login' => $loginForm->createView(),
        ));
    }
}
