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
        $proms = array();
        $total = 0;
        foreach ($data as $key => $product) {

        	$chapeau = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($key);
            $proms = null;
            $proms = $chapeau->getPromotions();

        	$dataToSend[$key] = array('qte' => $product, 'product' => $chapeau, 'proms' => $proms);

            if (sizeof($proms) > 0) {
                $price = $chapeau->getPrice();
                foreach ($proms as $key => $prom) {
                    $price -= $chapeau->getPrice() / $prom->getReduction();
                }
                $total += $price * $product;
            } else {
                $total += $chapeau->getPrice() * $product;
            }
            
        }

        return $this->render('sil12VitrineBundle:Panier:panier.html.twig',
            array('panier' => $dataToSend, 'total' => $total, 'proms' => $proms)
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
        var_dump('validationPanierAction');die;
        $session = $this->getRequest()->getSession();
        $client = $session->get(SecurityContext::LAST_USERNAME);

        $orderHat = new OrderHat();
        $orderHat->setClient($client);
        $orderHat->setOrderDate(new \DateTime());
        $orderHat->setValidated(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($orderHat);

        $panier = $session->get('panier', new Panier());
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
            $proms = $chapeau->getPromotions();
            if (sizeof($proms) > 0) {
                var_dump("reduc");die;
                $price = $chapeau->getPrice();
                foreach ($proms as $key => $prom) {
                    $price -= $chapeau->getPrice() / $prom->getReduction();
                }
                $orderLine->setPrice($price);
            } else {
                $orderLine->setPrice($chapeau->getPrice());
            }
            $totalPrice += $orderLine->getPrice() * $product;
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