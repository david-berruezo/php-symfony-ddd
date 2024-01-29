<?php
namespace App\Application\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Domain\Service\ProductManager;
use Symfony\Component\Routing\Annotation\Route;

class ProductController{

    private ProductManager $productManager;

    public function __construct(ProductManager $productManager)
    {
        $this->productManager = $productManager;
    }

    #[Route('/product', name: 'app_contact' , methods:["GET","POST"])]
    public function create(Request $request): JsonResponse
    {
        $product = $this->productManager->createProduct('Name' , 'sku' , 100);

        return new JsonResponse([
            'product' => [
                'id' => $product->getId(),
                'name' => $product->getName(),
            ]
        ]);
    }
}