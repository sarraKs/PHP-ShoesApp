<?php

namespace App\Entity;

use App\Repository\PlacardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlacardRepository::class)]
class Placard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'placard', targetEntity: Chaussure::class, cascade: ['persist', 'remove'])]
    private Collection $chaussures;

    #[ORM\Column(length: 255)]
    private ?string $NomPlacard = null;

    #[ORM\Column(length: 255)]
    private ?string $RefPlacard = null;

    #[ORM\OneToOne(mappedBy: 'placard', cascade: ['persist', 'remove'])]
    private ?Member $member = null;

    public function __construct()
    {
        $this->chaussures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
   
    
    /**
     * @return Collection<int, Chaussure>
     */
    public function getChaussures(): Collection
    {
        return $this->chaussures;
    }

    public function addChaussure(Chaussure $chaussure): static
    {
        if (!$this->chaussures->contains($chaussure)) {
            $this->chaussures->add($chaussure);
            $chaussure->setPlacard($this);
        }

        return $this;
    }

    public function removeChaussure(Chaussure $chaussure): static
    {
        if ($this->chaussures->removeElement($chaussure)) {
            // set the owning side to null (unless already changed)
            if ($chaussure->getPlacard() === $this) {
                $chaussure->setPlacard(null);
            }
        }

        return $this;
    }

    public function getNomPlacard(): ?string
    {
        return $this->NomPlacard;
    }

    public function setNomPlacard(string $NomPlacard): static
    {
        $this->NomPlacard = $NomPlacard;

        return $this;
    }

    public function getRefPlacard(): ?string
    {
        return $this->RefPlacard;
    }

    public function setRefPlacard(string $RefPlacard): static
    {
        $this->RefPlacard = $RefPlacard;

        return $this;
    }

    public function getMember(): ?Member
    {
        return $this->member;
    }

    public function setMember(Member $member): static
    {
        // set the owning side of the relation if necessary
        if ($member->getPlacard() !== $this) {
            $member->setPlacard($this);
        }

        $this->member = $member;

        return $this;
    }
    public function __toString() {
        return $this->NomPlacard . " [Ref. " . $this->RefPlacard . "]";
    }
}
