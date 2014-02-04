<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sil12\VitrineBundle\Entity\Panier;
use sil12\VitrineBundle\Entity\Client;
use sil12\VitrineBundle\Entity\Orderhat;
use sil12\VitrineBundle\Entity\orderLine;

class PanierController extends Controller
{
	public function contenuPanierAction($id,$type,$nb) {

		$em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());

        switch ($type)
        {
            case "add":
                $panier->addArticle($id,$nb);
                break;
            case "del":
                $panier->removeArticle($id,$nb);
                break;
            case "rem":
                $panier->supprimeArticle($id);
                break;
        }

	    $session->set('panier', $panier);

        $data = $panier->getContenu();

        
        $dataToSend = array();
        foreach ($data as $key => $product) {

        	$chapeau = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($key);
        	$dataToSend[$key] = array('qte' => $product, 'product' => $chapeau);
        }

        return $this->render('sil12VitrineBundle:Panier:panier.html.twig',
            array('panier' => $dataToSend)
        );
    }


    public function validationPanierAction() {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();

        $orderHat = new OrderHat();
        $client = $this->getDoctrine()->getManager()
                        ->getRepository('sil12VitrineBundle:Client')
                        ->find($session->get('id_client'));
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