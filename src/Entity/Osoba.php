<?php

namespace App\Entity;

use App\Repository\OsobaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OsobaRepository::class)
 */
class Osoba
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Auto::class, mappedBy="osoba")
     */
    private $auta;

    public function __construct()
    {
        $this->auta = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Auto[]
     */
    public function getAuta(): Collection
    {
        return $this->auta;
    }

    public function addAutum(Auto $autum): self
    {
        if (!$this->auta->contains($autum)) {
            $this->auta[] = $autum;
            $autum->setOsoba($this);
        }

        return $this;
    }

    public function removeAutum(Auto $autum): self
    {
        if ($this->auta->contains($autum)) {
            $this->auta->removeElement($autum);
            // set the owning side to null (unless already changed)
            if ($autum->getOsoba() === $this) {
                $autum->setOsoba(null);
            }
        }

        return $this;
    }
        public function __toString() {
        return $this->name;
}
}
