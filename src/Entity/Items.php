<?php

namespace App\Entity;

use App\Repository\ItemsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemsRepository::class)
 */
class Items
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity=Orders::class, inversedBy="Items")
     */
    private $orders;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrders(): ?Orders
    {
        return $this->orders;
    }

    public function setOrders(?Orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }
    function getName():?string {
        return $this->name;
    }

    function setName($name): void {
        $this->name = $name;
    }

        public function __toString() {
        return $this->name;
        
    }
}
