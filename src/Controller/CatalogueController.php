<?php

namespace App\Controller;

use App\Entity\Images;
use App\Service\Image;
use App\Form\ImageType;
use App\Entity\Catalogue;
use App\Form\CatalogueType;
use App\Repository\ImagesRepository;
use App\Repository\CatalogueRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CatalogueController extends AbstractController
{
    /**
     * @Route("/catalogue", name="catalogue")
     */
    public function catalogue(CatalogueRepository $catalogueRepository): Response
    {
        return $this->render('catalogue/index.html.twig', [
            'catalogue' => $catalogueRepository->findAll()
        ]);
    }


    /**
     * @Route("/catalogue/{id}", name="afficher")
     */
    public function afficher(Catalogue $catalogue, ImagesRepository $imagesRepository): Response
    {

        $table = $imagesRepository->findByExampleField($catalogue->getId());
        foreach ($table as $image) {
            $catalogue->ajouterImage($image);
            $SliderFirstImage = $image->getImage();
        }

        return $this->render('catalogue/afficher.html.twig', [
            'description' => $catalogue->getDescription(),
            'titre' => $catalogue->getTitle(),
            'date' => $catalogue->getDateAt(),
            'id' => $catalogue->getId(),
            'images' => $catalogue->getLesImages(),
            'SliderFirstImage' => $SliderFirstImage
        ]);
    }




    /**
     * @Route("/catalogue/{id}/suprimmer", name="suprimmer")
     */
    public function suprimmer(Catalogue $catalogue): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($catalogue);
        $em->flush();
        return $this->redirectToRoute('catalogue');
    }

    /**
     * @Route("/new", name="nouveau")
     */
    public function new(Request $request, Image $image): Response
    {
        $catalogue = new Catalogue();

        $form = $this->createForm(CatalogueType::class);
        $form->handleRequest($request); // methode qui permet de traiter le formulaire
        $form2 = $this->createForm(ImageType::class);
        $form2->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $imagePrincipale = $form->get("imagePrincipale")->getData();
            $catalogue->setImagePrincipale($image->uneImageFormulaire($imagePrincipale));
            $catalogue->setDescription($form->get('description')->getData());
            $catalogue->setTitle($form->get('title')->getData());
            $lesImages = $form2->get('image')->getData();

            foreach ($lesImages as $uneImage) {
                $instanceImage = new Images();
                $instanceImage->setImage($image->uneImageFormulaire($uneImage));
                $catalogue->ajouterImage($instanceImage);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($catalogue);
            $entityManager->flush();
        }



        return $this->render('catalogue/new.html.twig', [
            'form' => $form->createView(),
            'form2' => $form2->createView()
        ]);
    }
}