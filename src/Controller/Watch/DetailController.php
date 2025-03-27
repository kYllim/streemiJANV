<?php

namespace App\Controller\Watch;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DetailController extends AbstractController
{
    #[Route('/detail', name: 'app_detail')]
    public function detail(): Response
    {
        return $this->render('watch/detail.html.twig');
    }

    #[Route('/detail_serie', name: 'app_detail_serie')]
    public function detailSerie(): Response
    {
        return $this->render('watch/detail_serie.html.twig');
    }
}