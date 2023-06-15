<?php

namespace App\Entity;

use App\Repository\VacannciesForAdmissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VacannciesForAdmissionRepository::class)]
class VacannciesForAdmission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $course = null;

    #[ORM\Column(length: 255)]
    private ?string $professio_specialty = null;

    #[ORM\Column(length: 255)]
    private ?string $based_training_program = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $count_budget_places = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $count_pay_places = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): static
    {
        $this->course = $course;

        return $this;
    }

    public function getProfessioSpecialty(): ?string
    {
        return $this->professio_specialty;
    }

    public function setProfessioSpecialty(string $professio_specialty): static
    {
        $this->professio_specialty = $professio_specialty;

        return $this;
    }

    public function getBasedTrainingProgram(): ?string
    {
        return $this->based_training_program;
    }

    public function setBasedTrainingProgram(string $based_training_program): static
    {
        $this->based_training_program = $based_training_program;

        return $this;
    }

    public function getCountBudgetPlaces(): ?string
    {
        return $this->count_budget_places;
    }

    public function setCountBudgetPlaces(?string $count_budget_places): static
    {
        $this->count_budget_places = $count_budget_places;

        return $this;
    }

    public function getCountPayPlaces(): ?string
    {
        return $this->count_pay_places;
    }

    public function setCountPayPlaces(?string $count_pay_places): static
    {
        $this->count_pay_places = $count_pay_places;

        return $this;
    }
}
