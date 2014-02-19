<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use sil12\VitrineBundle\Entity\Panier;
use sil12\VitrineBundle\Entity\Orderhat;
use sil12\VitrineBundle\Entity\orderLine;


class PanierController extends Controller
{
	public function contenuPanierAction() {
		$em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());

        $data = $panier->getContenu();

        $dataToSend = array();
        $total = 0;
        foreach ($data as $key => $product) {

        	$chapeau = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($key);
        	$dataToSend[$key] = array('qte' => $product, 'product' => $chapeau);

            $total += $chapeau->getPrice() * $product;
        }

        return $this->render('sil12VitrineBundle:Panier:panier.html.twig',
            array('panier' => $dataToSend, 'total' => $total)
        );
    }

    public function addProductAction($id,$qte) {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());

        $product = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($id);

        if ($product->getStock() - $qte >= 0)   
            $panier->addArticle($id,$qte);

        $session->set('panier', $panier);

        return $this->redirect($this->generateUrl('sil12_vitrine_contenuPanier'));
    }

    public function deleteProductAction($id,$qte) {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());

        $panier->removeArticle($id,$qte);

        $session->set('panier', $panier);

        return $this->redirect($this->generateUrl('sil12_vitrine_contenuPanier'));
    }


    public function removeProductAction($id) {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());

        $panier->supprimeArticle($id);

        $session->set('panier', $panier);

        return $this->redirect($this->generateUrl('sil12_vitrine_contenuPanier'));
    }

    


    public function validationPanierAction() {
        $session = $this->getRequest()->getSession();
        $client = $session->get(SecurityContext::LAST_USERNAME);

        $orderHat = new OrderHat();
        $orderHat->setClient($client);
        $orderHat->setOrderDate(new \DateTime());
        $orderHat->setValidated(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($orderHat);


        $type = null;
        $id = null;


        $panier = $session->get('panier', new Panier());

        if ($type == "add") {
            $panier->addArticle($id,$nb);    
        } else if ($type == "del") {
            $panier->removeArticle($id,$nb);
        }

        $session->set('panier', $panier);

        $data = $panier->getContenu();
        

        $dataToSend = array();
        $totalPrice = 0;
        foreach ($data as $key => $product) {

            $chapeau = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($key);
            $dataToSend[$key] = array('qte' => $product, 'product' => $chapeau);

            $orderLine = new OrderLine();
            $orderLine->setOrderhat($orderHat);
            $orderLine->setProduct($chapeau);
            $orderLine->setPrice($chapeau->getPrice());
            $totalPrice += $chapeau->getPrice() * $product;
            $orderLine->setQuantity($product);
            $em->persist($orderLine);
            
        }

        $panier->viderPanier();
        $em->flush();

        return $this->render('sil12VitrineBundle:Panier:validationPanier.html.twig',
            array('panier' => $dataToSend, 'orderHat' => $orderHat, 'totalPrice' => $totalPrice)
        );
    }
}

?>