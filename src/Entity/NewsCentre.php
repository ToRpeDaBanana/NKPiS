<?php

namespace App\Entity;

use App\Repository\NewsCentreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewsCentreRepository::class)]
class NewsCentre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $text_one = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text_two = null;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getTextOne(): ?string
    {
        return $this->text_one;
    }

    public function setTextOne(string $text_one): static
    {
        $this->text_one = $text_one;

        return $this;
    }

    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    public function setPhoto(?array $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getTextTwo(): ?string
    {
        return $this->text_two;
    }

    public function setTextTwo(?string $text_two): static
    {
        $this->text_two = $text_two;

        return $this;
    }
}
