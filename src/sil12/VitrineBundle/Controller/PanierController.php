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
            array('panier' => $dataToSend, 'total' => round($total, 2), 'proms' => $proms)
        );
    }

    public function showPanierAction() {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier', new Panier());

        $data = $panier->getContenu();

        $dataToSend = array();
        $proms = array();
        $total = 0;
        $nb=0;
        foreach ($data as $key => $product) {
            
            $chapeau = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($key);
            $proms = null;
            $proms = $chapeau->getPromotions();

            $nb += $product;

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

        return $this->render('sil12VitrineBundle:Panier:show_panier.html.twig',
            array('total' => round($total, 2), 'nb' =>$nb)
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
        $client = $this->getUser();

        $orderHat = new OrderHat();
        $orderHat->setClient($client);
        $orderHat->setOrderDate(new \DateTime());
        $orderHat->setValidated(true);


        $em = $this->getDoctrine()->getManager();
        $em->persist($orderHat);

        $panier = $session->get('panier', new Panier());
        $data = $panier->getContenu();
        

        $dataToSend = array();
        $proms = array();
        $total = 0;
        $totalPrice = 0;
        foreach ($data as $key => $product) {
            $chapeau = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($key);

            $proms = null;
            $proms = $chapeau->getPromotions();

            $dataToSend[$key] = array('qte' => $product, 'product' => $chapeau, 'proms' => $proms);

            $stock = $chapeau->getStock();
            if ($stock < $product) {
                $error = "Un des articles est en rupture de stock !";
                return $this->render('sil12VitrineBundle:Panier:validationPanier.html.twig',
                    array('panier' => $dataToSend, 'orderHat' => $orderHat, 'totalPrice' => $totalPrice, 'error' => $error)
                );
            }

            $chapeau->setStock($stock -= $product);

            if (sizeof($proms) > 0) {
                $price = $chapeau->getPrice();
                foreach ($proms as $key => $prom) {
                    $price -= $chapeau->getPrice() / $prom->getReduction();
                }
                $total += $price * $product;
            } else {
                $total += $chapeau->getPrice() * $product;
            }

            $orderLine = new OrderLine();
            $orderLine->setOrderhat($orderHat);
            $orderLine->setProduct($chapeau);

            if (sizeof($proms) > 0) {
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

        $message = \Swift_Message::newInstance()
           ->setSubject('HATme.com -  Récapitulatif de votre commande')
           ->setFrom('contact@e-coms.fr')
           ->setTo($this->getUser()->getMail())
           ->setBody($this->renderView('sil12VitrineBundle:Email:validationPanier.txt.twig', array('panier' => $dataToSend, 'orderHat' => $orderHat, 'totalPrice' => $totalPrice)),'text/html');
        $this->get('mailer')->send($message);
        

        return $this->render('sil12VitrineBundle:Panier:validationPanier.html.twig',
            array('panier' => $dataToSend, 'orderHat' => $orderHat, 'totalPrice' => round($totalPrice, 2))
        );
    }
}

?>