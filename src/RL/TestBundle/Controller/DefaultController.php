<?php

namespace RL\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RL\TestBundle\Entity\Client;
use RL\TestBundle\Form\ClientType;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\JsonResponse;
 
class DefaultController extends Controller
{
    public function indexAction()
    {
        $client = new Client;
        $form = $this->createForm(new ClientType, $client);
        $validator = $this->get('validator');
        // On déclenche la validation
        
        // Depuis un contrôleur
          $request = $this->get('request');
          
          if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
        // …   
                var_dump($form);die;;
                }
            }

        return $this->render('RLTestBundle:Default:index.html.twig', array(
        'form' => $form->createView(),
        ));

    }
    
}
