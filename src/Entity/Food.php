<?php

namespace App\Entity;

use App\Repository\FoodRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FoodRepository::class)]
class Food
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $file_contract = null;

    #[ORM\Column(length: 255)]
    private ?string $file_dogovor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFileContract(): ?string
    {
        return $this->file_contract;
    }

    public function setFileContract(string $file_contract): static
    {
        $this->file_contract = $file_contract;

        return $this;
    }

    public function getFileDogovor(): ?string
    {
        return $this->file_dogovor;
    }

    public function setFileDogovor(string $file_dogovor): static
    {
        $this->file_dogovor = $file_dogovor;

        return $this;
    }
}
