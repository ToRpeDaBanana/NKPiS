<?php

namespace App\Entity;

use App\Repository\InformRealizeDopEduRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformRealizeDopEduRepository::class)]
class InformRealizeDopEdu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(length: 255)]
    private ?string $type_activity = null;

    #[ORM\Column(length: 255)]
    private ?string $name_association = null;

    #[ORM\Column(length: 255)]
    private ?string $group_name = null;

    #[ORM\Column(length: 255)]
    private ?string $program_category = null;

    #[ORM\Column(length: 255)]
    private ?string $age = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fio_teacher = null;

    #[ORM\Column(length: 255)]
    private ?string $training_free = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $duration_training = null;

    #[ORM\Column(length: 255)]
    private ?string $form_lesson = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getTypeActivity(): ?string
    {
        return $this->type_activity;
    }

    public function setTypeActivity(string $type_activity): static
    {
        $this->type_activity = $type_activity;

        return $this;
    }

    public function getNameAssociation(): ?string
    {
        return $this->name_association;
    }

    public function setNameAssociation(string $name_association): static
    {
        $this->name_association = $name_association;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->group_name;
    }

    public function setGroupName(string $group_name): static
    {
        $this->group_name = $group_name;

        return $this;
    }

    public function getProgramCategory(): ?string
    {
        return $this->program_category;
    }

    public function setProgramCategory(string $program_category): static
    {
        $this->program_category = $program_category;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getFioTeacher(): ?string
    {
        return $this->fio_teacher;
    }

    public function setFioTeacher(?string $fio_teacher): static
    {
        $this->fio_teacher = $fio_teacher;

        return $this;
    }

    public function getTrainingFree(): ?string
    {
        return $this->training_free;
    }

    public function setTrainingFree(string $training_free): static
    {
        $this->training_free = $training_free;

        return $this;
    }

    public function getDurationTraining(): ?string
    {
        return $this->duration_training;
    }

    public function setDurationTraining(?string $duration_training): static
    {
        $this->duration_training = $duration_training;

        return $this;
    }
    public function getFormLesson(): ?string
    {
        return $this->form_lesson;
    }

    public function setFormLesson(string $form_lesson): static
    {
        $this->form_lesson = $form_lesson;

        return $this;
    }
}

