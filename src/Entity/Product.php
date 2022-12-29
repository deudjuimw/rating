<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=ProductFamily::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $family;

    /**
     * @ORM\ManyToOne(targetEntity=ProductCategory::class, inversedBy="products")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=ProductProvider::class, inversedBy="products")
     */
    private $provider;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamily(): ?ProductFamily
    {
        return $this->family;
    }

    public function setFamily(?ProductFamily $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getCategory(): ?ProductCategory
    {
        return $this->category;
    }

    public function setCategory(?ProductCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getProvider(): ?ProductProvider
    {
        return $this->provider;
    }

    public function setProvider(?ProductProvider $provider): self
    {
        $this->provider = $provider;

        return $this;
    }
}
