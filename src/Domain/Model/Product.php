<?php
namespace App\Domain\Model;

class Product
{
    private string $id;
    private string $name;
    private string $sku;
    private int $priceCents;

    public function __construct(string $name , string $sku , int $priceCents)
    {
        //$this->id = $id;
        $this->id = 1;
        $this->name = $name;
        $this->sku = $sku;
        $this->priceCents = $priceCents;
    }

    public function getId(): string
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


}