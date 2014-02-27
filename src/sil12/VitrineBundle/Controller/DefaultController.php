<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use sil12\VitrineBundle\Entity\Panier;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $mostBought = $this->getDoctrine()
            ->getRepository('sil12VitrineBundle:OrderLine')
            ->mostBought(3);

        //var_dump($mostBought);die;

        $mostBoughtHats = array();
        foreach ($mostBought as $key => $ol) {
            $proms = $ol[0]->getProduct()->getPromotions();       
            $mostBoughtHats[$key] = array('chapeau' => $ol[0]->getProduct(), 'proms' => $proms);
        }

        $lastAdd = $this->getDoctrine()
            ->getRepository('sil12VitrineBundle:Product')
            ->lastAdd(3);

        $lastAddHats = array();
        foreach ($lastAdd as $key => $chapeau) {
            $proms = $chapeau->getPromotions();       
            $lastAddHats[$key] = array('chapeau' => $chapeau, 'proms' => $proms);
        }

        return $this->render('sil12VitrineBundle:Default:index.html.twig', 
            array('mostBought' => $mostBoughtHats, 'lastAdd' => $lastAddHats)
        );
    }

    public function mentionsAction()
    {
        return $this->render('sil12VitrineBundle:Default:mentions.html.twig');
    }

    public function catalogueAction()
    {

        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('sil12VitrineBundle:Category')
                        ->findAll();

        return $this->render('sil12VitrineBundle:Default:catalogue.html.twig',
			array('categories' => $categories)
		);
    }

    public function articlesParCategorieAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('sil12VitrineBundle:Product')
                        ->findByCategory($id);

        $chapeaux = array();
        foreach ($products as $key => $chapeau) {
            $proms = $chapeau->getPromotions();       
            $chapeaux[$key] = array('chapeau' => $chapeau, 'proms' => $proms);
        }

        return $this->render('sil12VitrineBundle:Default:articlesParCategorie.html.twig',
            array('chapeaux' => $chapeaux, 'catId' => $id)
        );
    }

    public function filteredArticlesParCategorieAction(Request $request) {
        $idCat = $request->request->get('catId');
        $type = $request->request->get('type');


        $em = $this->getDoctrine()->getManager();
        $filteredHats = $em->getRepository('sil12VitrineBundle:Product')
                           ->findBy(
                                array('category' => $idCat),
                                array($type => 'DESC')
                           );
            

        $chapeaux = array();
        foreach ($filteredHats as $key => $chapeau) {
            $proms = $chapeau->getPromotions();       
            $chapeaux[$key] = array('chapeau' => $chapeau, 'proms' => $proms);
        }

        return $this->render('sil12VitrineBundle:Default:articlesParCategorie.html.twig',
            array('chapeaux' => $chapeaux, 'catId' => $idCat, 'type' => $type)
        );
        
    }

    public function chapeauAction($id,$nb)
    {
        $em = $this->getDoctrine()->getManager();
        $chapeaux = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($id);

        if (!$chapeaux) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $proms = $chapeaux->getPromotions();

        $boughtWith =  null;

        return $this->render('sil12VitrineBundle:Default:chapeau.html.twig',
            array('chapeau' => $chapeaux, 'boughtWith' => $boughtWith, 'proms' => $proms)
        );
    }



    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new Response('Produit créé avec id '.$product->getId());
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->Manager();
        $product = $em->getRepository('sil12VitrineBundle:Product')->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException('No product found for id '.$id);
        }

        $product->setName('New product name!');
        $em->flush();

        return $this->redirect($this->generateUrl('homepage'));
    }

    public function showAction($id)
    {
        $product = $this->getDoctrine()->getManager()
                        ->getRepository('sil12VitrineBundle:Product')
                        ->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé avec id '.$id);
        }

        // faire quelque chose... Par exemple envoyer l'objet $product à un template
    }

    public function myOrdersAction()
    {
        $em = $this->getDoctrine()->getManager();

        $client = $this->getUser();

        $entities = $em->getRepository('sil12VitrineBundle:Orderhat')->findByClient($client);

        return $this->render('sil12VitrineBundle:Default:myorders.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function myOrdersShowAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $order = $em->getRepository('sil12VitrineBundle:Orderhat')->find($id);
        $OrderLines = $em->getRepository('sil12VitrineBundle:OrderLine')
                            ->findBy(
                                array('orderhat' => $id)
                            );

        return $this->render('sil12VitrineBundle:Default:myorders_show.html.twig', array(
            'order' => $order,
            'OrderLines' => $OrderLines,
        ));
    }

    public function shareProductAction(Request $request) {
        $email = $request->request->get('email');
        $idP = $request->request->get('id');

        $em = $this->getDoctrine()->getManager();

        $chapeaux = $em->getRepository('sil12VitrineBundle:Product')
                        ->find($idP);

        if (!$chapeaux) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $proms = $chapeaux->getPromotions();

        $boughtWith =  null;

        if ($email !== "") {
            $message = \Swift_Message::newInstance();
            $IMGpath = $message->embed(\Swift_Image::fromPath('http://localhost/PHP/Cours/projet-sil5-cours/web/bundles/sil12vitrine/images/'.$idP.'.png'));
            $message->setSubject('HATme.com - Un ami vous recommande un produit')
                    ->setFrom('contact@hatme.com')
                    ->setTo($email)
                    ->setBody($this->renderView('sil12VitrineBundle:Email:share.txt.twig', array('chapeau' => $chapeaux, 'boughtWith' => $boughtWith, 'IMGpath' => $IMGpath)))
                    ->setContentType('text/html')
            ;
            $this->get('mailer')->send($message);
        }

        return $this->render('sil12VitrineBundle:Default:chapeau.html.twig',
            array('chapeau' => $chapeaux, 'boughtWith' => $boughtWith, 'proms' => $proms )
        );
    }

}
