<?php

namespace App\Controller\Watch;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function category(): Response
    {
        return $this->render('watch/category.html.twig');
    }
}