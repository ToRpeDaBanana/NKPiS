<?php

namespace App\Entity;

use App\Repository\MedicalServiceDocumentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicalServiceDocumentRepository::class)]
class MedicalServiceDocument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY)]
    private ?array $treaty = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $vaccination = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTreaty(): ?array
    {
        return $this->treaty;
    }

    public function setTreaty(?array $treaty): static
    {
        $this->treaty = $treaty;

        return $this;
    }

    public function getVaccination(): ?array
    {
        return $this->vaccination;
    }

    public function setVaccination(?array $vaccination): static
    {
        $this->vaccination = $vaccination;

        return $this;
    }
}
