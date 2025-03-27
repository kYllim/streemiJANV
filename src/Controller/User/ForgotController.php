<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ForgotController extends AbstractController
{
    #[Route('/forgot', name: 'app_forgot')]
    public function forgot(): Response
    {
        return $this->render('user/forgot.html.twig');
    }
}