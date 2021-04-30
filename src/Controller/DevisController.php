<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Entity\Prestation;
use App\Form\DevisType;
use App\Form\PrestationType;
use Dompdf\Dompdf;
use Dompdf\Options;
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
        $prestation = new Prestation();
        $form = $this->createForm(DevisType::class, $devis);
        $form_p = $this->createForm(PrestationType::class, $prestation);
        
        if($form->isSubmitted() && $form_p->isSubmitted() && $form->isValid() && $form_p->isValid()){

            
            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont','Arial');
            
            $dompdf = new Dompdf($pdfOptions);
            $html = $this->renderView('devis/pdf.html.twig', [
                'title' => 'Test PDF'
            ]);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->stream("pdf.pdf", [
                "Attachment" => false
            ]);


        }
        return $this->render('devis/index.html.twig', [
            'form' => $form->createView(),
            'form_p' => $form_p->createView(),
        ]);
    }


}
