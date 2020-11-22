<?php

namespace App\Entity;

use App\Repository\KotRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KotRepository::class)
 */
class Kot
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
     * @ORM\ManyToOne(targetEntity=Pan::class, inversedBy="name")
     */
    private $pan;

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

    public function getPan(): ?Pan
    {
        return $this->pan;
    }

    public function setPan(?Pan $pan): self
    {
        $this->pan = $pan;

        return $this;
    }
            public function __toString() {
        return $this->name ;
}
}
