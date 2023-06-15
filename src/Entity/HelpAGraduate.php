<?php

namespace App\Entity;

use App\Repository\HelpAGraduateRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HelpAGraduateRepository::class)]
class HelpAGraduate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $text_one = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text_two = null;

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
