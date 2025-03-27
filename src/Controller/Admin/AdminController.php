<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function admin(): Response
    {
        return $this->render('admin/admin.html.twig');
    }

    #[Route('/admin/add_films', name: 'app_admin_add_films')]
    public function adminAddFilms(): Response
    {
        return $this->render('admin/admin_add_films.html.twig');
    }

    #[Route('/admin/films', name: 'app_admin_films')]
    public function adminFilms(): Response
    {
        return $this->render('admin/admin_films.html.twig');
    }

    #[Route('/admin/users', name: 'app_admin_users')]
    public function adminUsers(): Response
    {
        return $this->render('admin/admin_users.html.twig');
    }

    #[Route('/upload', name: 'app_upload')]
    public function upload(): Response
    {
        return $this->render('admin/upload.html.twig');
    }
}