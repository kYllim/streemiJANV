<?php

namespace App\Controller\Watch;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ListsController extends AbstractController
{
    #[Route('/lists', name: 'app_lists')]
    public function lists(): Response
    {
        return $this->render('watch/lists.html.twig');
    }
}