<?php

namespace App\Entity;

use App\Repository\InformResultPriemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformResultPriemRepository::class)]
class InformResultPriem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $specialties = null;

    #[ORM\Column(length: 255)]
    private ?string $budget = null;

    #[ORM\Column(length: 255)]
    private ?string $contract = null;

    #[ORM\Column(length: 255)]
    private ?string $avg_ball = null;

    #[ORM\Column(length: 255)]
    private ?string $recovery = null;

    #[ORM\Column(length: 255)]
    private ?string $deductions = null;

    #[ORM\Column(length: 255)]
    private ?string $translation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecialties(): ?string
    {
        return $this->specialties;
    }

    public function setSpecialties(string $specialties): static
    {
        $this->specialties = $specialties;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(string $budget): static
    {
        $this->budget = $budget;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(string $contract): static
    {
        $this->contract = $contract;

        return $this;
    }

    public function getAvgBall(): ?string
    {
        return $this->avg_ball;
    }

    public function setAvgBall(string $avg_ball): static
    {
        $this->avg_ball = $avg_ball;

        return $this;
    }

    public function getRecovery(): ?string
    {
        return $this->recovery;
    }

    public function setRecovery(string $recovery): static
    {
        $this->recovery = $recovery;

        return $this;
    }

    public function getDeductions(): ?string
    {
        return $this->deductions;
    }

    public function setDeductions(string $deductions): static
    {
        $this->deductions = $deductions;

        return $this;
    }

    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    public function setTranslation(string $translation): static
    {
        $this->translation = $translation;

        return $this;
    }
}
