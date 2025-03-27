<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ResetController extends AbstractController
{
    #[Route('/reset', name: 'app_reset')]
    public function reset(): Response
    {
        return $this->render('user/reset.html.twig');
    }
}