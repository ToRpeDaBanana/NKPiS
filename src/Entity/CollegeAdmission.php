<?php

namespace App\Entity;

use App\Repository\CollegeAdmissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CollegeAdmissionRepository::class)]
class CollegeAdmission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $text = null;

    #[ORM\Column(length: 255)]
    private ?string $documents_rf = null;

    #[ORM\Column(length: 255)]
    private ?string $documents_foreign = null;

    #[ORM\Column(length: 255)]
    private ?string $text_two = null;

    #[ORM\Column(length: 255)]
    private ?string $cost_education = null;

    #[ORM\Column(length: 255)]
    private ?string $text_three = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDocumentsRf(): ?string
    {
        return $this->documents_rf;
    }

    public function setDocumentsRf(string $documents_rf): static
    {
        $this->documents_rf = $documents_rf;

        return $this;
    }

    public function getDocumentsForeign(): ?string
    {
        return $this->documents_foreign;
    }

    public function setDocumentsForeign(string $documents_foreign): static
    {
        $this->documents_foreign = $documents_foreign;

        return $this;
    }

    public function getTextTwo(): ?string
    {
        return $this->text_two;
    }

    public function setTextTwo(string $text_two): static
    {
        $this->text_two = $text_two;

        return $this;
    }

    public function getCostEducation(): ?string
    {
        return $this->cost_education;
    }

    public function setCostEducation(string $cost_education): static
    {
        $this->cost_education = $cost_education;

        return $this;
    }

    public function getTextThree(): ?string
    {
        return $this->text_three;
    }

    public function setTextThree(string $text_three): static
    {
        $this->text_three = $text_three;

        return $this;
    }
}
