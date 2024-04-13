<?php

namespace App\Entity;

use App\Repository\ChaussureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChaussureRepository::class)]
class Chaussure
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TitreChaussure = null;
    
    #[ORM\Column(length: 255)]
    private ?string $Categorie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Marque = null;
    
    #[ORM\Column(length: 255)]
    private ?string $Couleur = null;

    #[ORM\ManyToOne(inversedBy: 'chaussures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Placard $placard = null;

    #[ORM\ManyToMany(targetEntity: Exposition::class, mappedBy: 'chaussures')]
    private Collection $expositions;

    

    public function __construct()
    {
        $this->expositions = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }
    

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(?string $Marque): static
    {
        $this->Marque = $Marque;

        return $this;
    }
    
    public function getCouleur(): ?string
    {
        return $this->Couleur;
    }
    
    public function setCouleur(?string $Couleur): static
    {
        $this->Couleur = $Couleur;
        
        return $this;
    }
    
    public function __toString() {
        return $this->TitreChaussure;
    }

    public function getPlacard(): ?Placard
    {
        return $this->placard;
    }

    public function setPlacard(?Placard $placard): static
    {
        $this->placard = $placard;

        return $this;
    }

    /**
     * @return Collection<int, Exposition>
     */
    public function getExpositions(): Collection
    {
        return $this->expositions;
    }

    public function addExposition(Exposition $exposition): static
    {
        if (!$this->expositions->contains($exposition)) {
            $this->expositions->add($exposition);
            $exposition->addChaussure($this);
        }

        return $this;
    }

    public function removeExposition(Exposition $exposition): static
    {
        if ($this->expositions->removeElement($exposition)) {
            $exposition->removeChaussure($this);
        }

        return $this;
    }

    public function getTitreChaussure(): ?string
    {
        return $this->TitreChaussure;
    }

    public function setTitreChaussure(string $TitreChaussure): static
    {
        $this->TitreChaussure = $TitreChaussure;

        return $this;
    }

}
