<?php

namespace App\Entity;

use App\Repository\AcceptanceCheckDigitsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcceptanceCheckDigitsRepository::class)]
class AcceptanceCheckDigits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $years_title = null;

    #[ORM\Column(length: 800)]
    private ?string $text = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getYearsTitle(): ?string
    {
        return $this->years_title;
    }

    public function setYearsTitle(string $years_title): static
    {
        $this->years_title = $years_title;

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
