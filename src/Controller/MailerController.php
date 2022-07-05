<?php

namespace App\Controller;

use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
   /**
    * @Route("/mail", name="email")
    */
   public function sendMail(MailerInterface $mailer)
   {
      // ...

      $mail = (new Email())
         ->from('expediteur@demo.test')
         ->to('destinataire@demo.test')
         ->subject('Mon beau sujet')
         ->html('<p>Ceci est mon message en HTML</p>')
      ;

      $mailer->send($mail);

      // ...
   }
}