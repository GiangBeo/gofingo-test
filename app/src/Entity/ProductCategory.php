<?php

namespace App\Entity;

use App\Repository\ProductCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductCategoryRepository::class)]
class ProductCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $product_e_id = null;

    #[ORM\Column]
    private ?int $category_e_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductEId(): ?int
    {
        return $this->product_e_id;
    }

    public function setProductEId(int $product_e_id): self
    {
        $this->product_e_id = $product_e_id;

        return $this;
    }

    public function getCategoryEId(): ?int
    {
        return $this->category_e_id;
    }

    public function setCategoryEId(int $category_e_id): self
    {
        $this->category_e_id = $category_e_id;

        return $this;
    }
}
