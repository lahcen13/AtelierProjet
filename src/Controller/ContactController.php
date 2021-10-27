<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mime\Email;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request); // methode qui permet de traiter le formulaire
        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            $email = (new Email())
                ->from('atelierdu811@gmail.com')
                ->to('atelierdu811@gmail.com')
                ->subject($task->getObjet())
                ->text('Atelier du 811.')
                ->html('<h4> Mail : ' . $task->getMail() . '</h4> <h4> Nom : ' . $task->getNom() . '</h4> <h4> Prénom : ' . $task->getPrenom() . '</h4>  <h4> Nom de la société : ' . $task->getNomSociete() . '</h4>' . '<p>' . $task->getMessage() . '</p>');

            $mailer->send($email);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}