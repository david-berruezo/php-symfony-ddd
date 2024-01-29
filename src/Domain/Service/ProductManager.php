<?php
namespace App\Domain\Service;

use App\Domain\Model\Product;
use App\Domain\Repository\ProductRepository;

class ProductManager{

    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct(string $name , string $sku , int $priceCents): Product
    {
        $ide = 1;
        $product = new Product($name , $sku , $priceCents);

        $this->productRepository->save($product);

        return $product;
    }


}