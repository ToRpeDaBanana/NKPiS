<?php

namespace App\Entity;

use App\Repository\AvailableEnvironmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvailableEnvironmentRepository::class)]
class AvailableEnvironment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 800)]
    private ?string $text = null;

    #[ORM\Column(type: Types::ARRAY)]
    private ?array $photo = null;

    #[ORM\Column(length: 800)]
    private ?string $text_two = null;

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

    public function setTextTwo(string $text_two): static
    {
        $this->text_two = $text_two;

        return $this;
    }
}
