<?php

namespace App\Entity;

use App\Repository\ControlSovDocumentsRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: ControlSovDocumentsRepository::class)]
class ControlSovDocuments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $category_document = null;

    #[ORM\Column(length: 255)]
    private ?string $document = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isCategoryDocument(): ?bool
    {
        return $this->category_document;
    }

    public function setCategoryDocument(bool $category_document): self
    {
        $this->category_document = $category_document;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(?string $document): self
    {
        $this->document = $document;

        return $this;
    }
}
