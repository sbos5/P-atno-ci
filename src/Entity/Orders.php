<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Items::class, mappedBy="orders")
     */
    private $Items;

    public function __construct()
    {
        $this->Items = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Items[]
     */
    public function getItems(): Collection
    {
        return $this->Items;
    }

    public function addItem(Items $item): self
    {
        if (!$this->Items->contains($item)) {
            $this->Items[] = $item;
            $item->setOrders($this);
        }

        return $this;
    }

    public function removeItem(Items $item): self
    {
        if ($this->Items->contains($item)) {
            $this->Items->removeElement($item);
            // set the owning side to null (unless already changed)
            if ($item->getOrders() === $this) {
                $item->setOrders(null);
            }
        }

        return $this;
    }
}
