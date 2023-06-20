<?php

namespace App\Entity;

use App\Repository\VeteransLaborDocumentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VeteransLaborDocumentRepository::class)]
class VeteransLaborDocument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $file = null;

    public function getId(): ?int
    {
        return $this->id;
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
