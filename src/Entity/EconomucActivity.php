<?php

namespace App\Entity;

use App\Repository\EconomucActivityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EconomucActivityRepository::class)]
class EconomucActivity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: false)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $sybsidy_state_task = null;

    #[ORM\Column]
    private ?int $extra_budget = null;

    #[ORM\Column]
    private ?int $target_subsidies = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSybsidyStateTask(): ?int
    {
        return $this->sybsidy_state_task;
    }

    public function setSybsidyStateTask(int $sybsidy_state_task): static
    {
        $this->sybsidy_state_task = $sybsidy_state_task;

        return $this;
    }

    public function getExtraBudget(): ?int
    {
        return $this->extra_budget;
    }

    public function setExtraBudget(int $extra_budget): static
    {
        $this->extra_budget = $extra_budget;

        return $this;
    }

    public function getTargetSubsidies(): ?int
    {
        return $this->target_subsidies;
    }

    public function setTargetSubsidies(int $target_subsidies): static
    {
        $this->target_subsidies = $target_subsidies;

        return $this;
    }
}
