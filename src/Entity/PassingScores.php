<?php

namespace App\Entity;

use App\Repository\PassingScoresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PassingScoresRepository::class)]
class PassingScores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $class = null;

    #[ORM\Column(length: 255)]
    private ?string $speciality = null;

    #[ORM\Column(length: 255)]
    private ?string $minimal_ball = null;

    #[ORM\Column(length: 255)]
    private ?string $training_period = null;

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

    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }

    public function setSpeciality(string $speciality): static
    {
        $this->speciality = $speciality;

        return $this;
    }

    public function getMinimalBall(): ?string
    {
        return $this->minimal_ball;
    }

    public function setMinimalBall(string $minimal_ball): static
    {
        $this->minimal_ball = $minimal_ball;

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
}
