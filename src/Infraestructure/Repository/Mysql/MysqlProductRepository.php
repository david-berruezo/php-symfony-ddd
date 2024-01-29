<?php
namespace App\Infraestructure\Repository\Mysql;

use App\Domain\Model\Product;
use App\Domain\Repository\ProductRepository;

class MysqlProductRepository implements ProductRepository
{

    private array $products = [];

    public function save(Product $product): void
    {
        $this->products[$product->getId()] = $product;
    }
}