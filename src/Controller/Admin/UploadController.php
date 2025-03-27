<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class UploadController extends AbstractController
{
    #[Route('/upload', name: 'app_upload')]
    public function upload(): Response
    {
        return $this->render('admin/upload.html.twig');
    }
}