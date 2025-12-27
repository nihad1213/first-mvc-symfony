<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategoryRepository $categoryRepo, ProductRepository $productRepo): Response
{
    return $this->render('home/index.html.twig', [
        'categories' => $categoryRepo->findAll(),
        'products' => $productRepo->findAll(),
    ]);
}
}
