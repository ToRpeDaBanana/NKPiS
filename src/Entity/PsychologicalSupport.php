<?php

namespace App\Entity;

use App\Repository\PsychologicalSupportRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PsychologicalSupportRepository::class)]
class PsychologicalSupport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $text_one = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text_two = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sub_title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text_tree = null;

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

    public function getSubTitle(): ?string
    {
        return $this->sub_title;
    }

    public function setSubTitle(?string $sub_title): static
    {
        $this->sub_title = $sub_title;

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
}
