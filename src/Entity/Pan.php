<?php

namespace App\Entity;

use App\Repository\PanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanRepository::class)
 */
class Pan
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    private $nam;
    function getNam() {
        return $this->nam;
    }

    function setNam($nam): void {
        $this->nam = $nam;
    }

        /**
     * @ORM\OneToMany(targetEntity=Kot::class, mappedBy="pan")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nane;

    public function __construct()
    {
        $this->name = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Kot[]
     */
    public function getName(): Collection
    {
        return $this->name;
    }

    public function addName(Kot $name): self
    {
        if (!$this->name->contains($name)) {
            $this->name[] = $name;
            $name->setPan($this);
        }

        return $this;
    }

    public function removeName(Kot $name): self
    {
        if ($this->name->contains($name)) {
            $this->name->removeElement($name);
            // set the owning side to null (unless already changed)
            if ($name->getPan() === $this) {
                $name->setPan(null);
            }
        }

        return $this;
    }
        public function __toString() {
        return $this->nane ;
}

        public function getNane(): ?string
        {
            return $this->nane;
        }

        public function setNane(?string $nane): self
        {
            $this->nane = $nane;

            return $this;
        }
}
