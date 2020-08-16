<?php

namespace App\Controller;

use App\Entity\TestUpload;
use App\Form\TestUploadType;
use Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(Request $request, UploadableManager $uploadableManager)
    {
        $form = $this->createForm(TestUploadType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $document = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($document);

            // Here, "getMyFile" returns the "UploadedFile" instance that the form bound in your $myFile property
            $uploadableManager->markEntityToUpload($document, $document->getPath());

            $em->flush();
        }

        return $this->render('test/index.html.twig', array('form' => $form->createView()));
    }
}
