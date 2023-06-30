<?php

namespace App\Entity;

use App\Repository\InformOfRealizeEduProgramRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformOfRealizeEduProgramRepository::class)]
class InformOfRealizeEduProgram
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $normativ_edu = null;

    #[ORM\Column(length: 255)]
    private ?string $budget = null;

    #[ORM\Column(length: 255)]
    private ?string $contract = null;

    #[ORM\Column(length: 255)]
    private ?string $count_foreign = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNormativEdu(): ?string
    {
        return $this->normativ_edu;
    }

    public function setNormativEdu(string $normativ_edu): static
    {
        $this->normativ_edu = $normativ_edu;

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

    public function getCountForeign(): ?string
    {
        return $this->count_foreign;
    }

    public function setCountForeign(string $count_foreign): static
    {
        $this->count_foreign = $count_foreign;

        return $this;
    }
}
