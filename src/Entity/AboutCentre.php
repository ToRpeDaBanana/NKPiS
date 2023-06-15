<?php

namespace App\Entity;

use App\Repository\AboutCentreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AboutCentreRepository::class)]
class AboutCentre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $text_one = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text_two = null;

    #[ORM\Column(length: 255)]
    private ?string $senior_foreman = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text_tree = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $photo = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $file = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

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

    public function getSeniorForeman(): ?string
    {
        return $this->senior_foreman;
    }

    public function setSeniorForeman(string $senior_foreman): static
    {
        $this->senior_foreman = $senior_foreman;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTextTree(): ?string
    {
        return $this->text_tree;
    }

    public function setTextTree(?string $text_tree): static
    {
        $this->text_tree = $text_tree;

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

    public function getFile(): ?array
    {
        return $this->file;
    }

    public function setFile(?array $file): static
    {
        $this->file = $file;

        return $this;
    }
}
