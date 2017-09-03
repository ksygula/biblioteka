<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BibliotekaController extends Controller{
    /**
     * @Route("/", name="biblioteka")
     */
    public function indexAction(Request $request){
        return $this->render('biblioteka/index.html.twig');
    }
    /**
     * @Route("/help", name="help")
     */
    public function helpAction(Request $request){
        return $this->render('biblioteka/help.html.twig');
    }
}
