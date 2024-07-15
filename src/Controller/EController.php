<?php

namespace App\Controller;

use App\Repository\KatherineJMZRepository;
use Doctrine\ORM\EntityManager\Interfaces;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symphony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EController extends AbstractController
{
    /**
     * @Route("/e", name="app_e")
     */
    public function getProducts(ProductRepository $productRepository): JsonResponse
    {
        $products = $productRepository->findAll();
        return $this->json($products);
    }
    
    #Route("/KatherineJMZ", methods={"POST"})
    
    public function createProduct(Request $request, EntityManagerInterface $em): J
    {
        $data = json_decode($request->getContent(), true);
        $product = new Product();
        $product->setName($data['name']);
        $product->setPrice($data['price']);
        $em->persist($product);
        $em->flush();
        return $this->json($product);
    }
}
