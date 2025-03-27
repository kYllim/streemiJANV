<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class SubscriptionsController extends AbstractController
{
    #[Route('/subscriptions', name: 'app_subscriptions')]
    public function subscriptions(): Response
    {
        return $this->render('user/subscriptions.html.twig');
    }
}