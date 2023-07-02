<?php

namespace App\Entity;

use App\Repository\TransferCollegeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransferCollegeRepository::class)]
class TransferCollege
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1000)]
    private ?string $text = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sub_title = null;

    #[ORM\Column(length: 1000)]
    private ?string $text_instruction = null;

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

    public function getSubTitle(): ?string
    {
        return $this->sub_title;
    }

    public function setSubTitle(?string $sub_title): static
    {
        $this->sub_title = $sub_title;

        return $this;
    }

    public function getTextInstruction(): ?string
    {
        return $this->text_instruction;
    }

    public function setTextInstruction(string $text_instruction): static
    {
        $this->text_instruction = $text_instruction;

        return $this;
    }
}
