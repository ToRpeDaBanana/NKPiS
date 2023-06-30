<?php

namespace App\Entity;

use App\Repository\DocumentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentsRepository::class)]
class Documents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title_category = null;

    #[ORM\Column(length: 255)]
    private ?string $title_document = null;

    #[ORM\Column(length: 255)]
    private ?string $document = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleCategory(): ?string
    {
        return $this->title_category;
    }

    public function setTitleCategory(string $title_category): static
    {
        $this->title_category = $title_category;

        return $this;
    }

    public function getTitleDocument(): ?string
    {
        return $this->title_document;
    }

    public function setTitleDocument(string $title_document): static
    {
        $this->title_document = $title_document;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(string $document): static
    {
        $this->document = $document;

        return $this;
    }
}
