<?php

namespace App\Entity;

use App\Repository\AcceptanceCheckDigitsTableRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AcceptanceCheckDigitsTableRepository::class)]
class AcceptanceCheckDigitsTable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $class = null;

    #[ORM\Column(length: 255)]
    private ?string $basis = null;

    #[ORM\Column(length: 255)]
    private ?string $speciality = null;

    #[ORM\Column(length: 255)]
    private ?string $training_period = null;

    #[ORM\Column]
    private ?int $cpc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): static
    {
        $this->class = $class;

        return $this;
    }

    public function getBasis(): ?string
    {
        return $this->basis;
    }

    public function setBasis(string $basis): static
    {
        $this->basis = $basis;

        return $this;
    }

    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }

    public function setSpeciality(string $speciality): static
    {
        $this->speciality = $speciality;

        return $this;
    }

    public function getTrainingPeriod(): ?string
    {
        return $this->training_period;
    }

    public function setTrainingPeriod(string $training_period): static
    {
        $this->training_period = $training_period;

        return $this;
    }

    public function getCpc(): ?int
    {
        return $this->cpc;
    }

    public function setCpc(int $cpc): static
    {
        $this->cpc = $cpc;

        return $this;
    }
}
