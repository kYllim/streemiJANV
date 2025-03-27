<?php

namespace App\Controller\Watch;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DiscoverController extends AbstractController
{
    #[Route('/discover', name: 'app_discover')]
    public function discover(): Response
    {
        return $this->render('watch/discover.html.twig');
    }
}