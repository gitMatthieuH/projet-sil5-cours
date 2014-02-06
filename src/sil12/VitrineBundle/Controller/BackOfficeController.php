<?php

namespace sil12\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackOfficeController extends Controller
{
    public function indexAction()
    {
        return $this->render('sil12VitrineBundle:BackOffice:index.html.twig', array('name' => "admin"));
    }
}
