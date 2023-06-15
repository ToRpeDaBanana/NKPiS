<?php

namespace App\Entity;

use App\Repository\MedicalExamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicalExamRepository::class)]
class MedicalExam
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $monday = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tuesday = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $wednesday = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trursday = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $friday = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getMonday(): ?string
    {
        return $this->monday;
    }

    public function setMonday(?string $monday): static
    {
        $this->monday = $monday;

        return $this;
    }

    public function getTuesday(): ?string
    {
        return $this->tuesday;
    }

    public function setTuesday(?string $tuesday): static
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    public function getWednesday(): ?string
    {
        return $this->wednesday;
    }

    public function setWednesday(?string $wednesday): static
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    public function getTrursday(): ?string
    {
        return $this->trursday;
    }

    public function setTrursday(?string $trursday): static
    {
        $this->trursday = $trursday;

        return $this;
    }

    public function getFriday(): ?string
    {
        return $this->friday;
    }

    public function setFriday(?string $friday): static
    {
        $this->friday = $friday;

        return $this;
    }
}
