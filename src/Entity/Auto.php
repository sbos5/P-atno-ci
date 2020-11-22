<?php

namespace App\Entity;

use App\Repository\AutoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AutoRepository::class)
 */
class Auto
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
    private $marka;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Osoba::class, inversedBy="auta")
     */
    private $osoba;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarka(): ?string
    {
        return $this->marka;
    }

    public function setMarka(?string $marka): self
    {
        $this->marka = $marka;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getOsoba(): ?Osoba
    {
        return $this->osoba;
    }

    public function setOsoba(?Osoba $osoba): self
    {
        $this->osoba = $osoba;

        return $this;
    }
    public function __toString() {
        return $this->marka;
}
}
