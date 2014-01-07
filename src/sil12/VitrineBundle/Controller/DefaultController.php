<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sil12VitrineBundle:Default:index.html.twig', array('name' => $name));
    }
}
