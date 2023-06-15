<?php

namespace App\Entity;

use App\Repository\OraganizationMedicalLinkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OraganizationMedicalLinkRepository::class)]
class OraganizationMedicalLink
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $important_know = null;

    #[ORM\Column(length: 255)]
    private ?string $recommendations = null;

    #[ORM\Column(length: 255)]
    private ?string $text = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImportantKnow(): ?string
    {
        return $this->important_know;
    }

    public function setImportantKnow(string $important_know): static
    {
        $this->important_know = $important_know;

        return $this;
    }

    public function getRecommendations(): ?string
    {
        return $this->recommendations;
    }

    public function setRecommendations(string $recommendations): static
    {
        $this->recommendations = $recommendations;

        return $this;
    }
    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }
}
