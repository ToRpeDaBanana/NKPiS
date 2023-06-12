<?php

namespace App\Entity;

use App\Repository\PaidEduServRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[ORM\Entity(repositoryClass: PaidEduServRepository::class)]
class PaidEduServ
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $parent_folder = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $procedur = [];

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParentFolder(): array
    {
        return $this->parent_folder;
    }

    public function setParentFolder(array $parent_folder): self
    {
        $this->parent_folder = $parent_folder;

        return $this;
    }

    public function getProcedur(): array
    {
        return $this->procedur;
    }

    public function setProcedur(array $procedur): self
    {
        $this->procedur = $procedur;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }
    private $files;

    public function __construct()
    {
        $this->files = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|File[]
     */
    public function getFiles(): ArrayCollection
    {
        return $this->files;
    }

    /**
     * @param ArrayCollection|File[] $files
     */
    public function setFiles(ArrayCollection $files): void
    {
        $this->files = $files;
    }

    public function addFile(File $file): void
    {
        $this->files->add($file);
    }

    public function removeFile(File $file): void
    {
        $this->files->removeElement($file);
    }
}
