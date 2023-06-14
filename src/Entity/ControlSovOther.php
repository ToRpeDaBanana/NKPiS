<?php

namespace App\Entity;

use App\Repository\ControlSovOtherRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ControlSovOtherRepository::class)]
class ControlSovOther
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $category_us = null;

    #[ORM\Column(nullable: false)]
    private ?bool $coop = null;

    #[ORM\Column(length: 255)]
    private ?string $job_title_us = null;

    #[ORM\Column(length: 255)]
    private ?string $job_loc = null;

    #[ORM\Column(length: 255)]
    private ?string $job_title = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $notes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategoryUs(): ?string
    {
        return $this->category_us;
    }

    public function setCategoryUs(string $category_us): self
    {
        $this->category_us = $category_us;

        return $this;
    }

    public function isCoop(): ?bool
    {
        return $this->coop;
    }

    public function setCoop(bool $coop): self
    {
        $this->coop = $coop;

        return $this;
    }

    public function getJobTitleUs(): ?string
    {
        return $this->job_title_us;
    }

    public function setJobTitleUs(string $job_title_us): self
    {
        $this->job_title_us = $job_title_us;

        return $this;
    }

    public function getJobLoc(): ?string
    {
        return $this->job_loc;
    }

    public function setJobLoc(string $job_loc): self
    {
        $this->job_loc = $job_loc;

        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->job_title;
    }

    public function setJobTitle(string $job_title): self
    {
        $this->job_title = $job_title;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }
}
