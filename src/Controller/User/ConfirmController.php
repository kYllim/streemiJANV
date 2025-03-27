<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ConfirmController extends AbstractController
{
    #[Route('/confirm', name: 'app_confirm')]
    public function confirm(): Response
    {
        return $this->render('user/confirm.html.twig');
    }
}