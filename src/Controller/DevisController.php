<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Form\DevisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DevisController extends AbstractController
{


    /**
     * @Route("/devis", name="devis", methods={"GET","POST"})
     */
    public function index(): Response
    {
        
        $devis = new Devis();
        $devis->setCreateAt(new \DateTime('now'));
        $form = $this->createForm(DevisType::class, $devis);
        

        return $this->render('devis/index.html.twig', [
            'form' => $form->createView()
        ]);
    }


}
