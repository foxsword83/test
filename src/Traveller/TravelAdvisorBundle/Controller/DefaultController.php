<?php

namespace Traveller\TravelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($nom)
    {
        return $this->render('TravellerTravelAdvisorBundle:Default:voyage.html.twig', array('nom'=>$nom));
    }
}
