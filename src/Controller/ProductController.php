<?php

namespace App\Controller;

use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    public function index(Request $request): Response
    {
        $form = $this->createForm(ProductType::class);
        $form->handleRequest($request);

        return $this->render('product/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
