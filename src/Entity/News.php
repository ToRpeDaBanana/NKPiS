<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewsRepository::class)]
class News
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $first_text = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $first_photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $second_text = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $second_photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $file = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFirstText(): ?string
    {
        return $this->first_text;
    }

    public function setFirstText(string $first_text): self
    {
        $this->first_text = $first_text;

        return $this;
    }

    public function getFirstPhoto(): ?string
    {
        return $this->first_photo;
    }

    public function setFirstPhoto(string $first_photo): self
    {
        $this->first_photo = $first_photo;

        return $this;
    }

    public function getSecondText(): ?string
    {
        return $this->second_text;
    }

    public function setSecondText(string $second_text): self
    {
        $this->second_text = $second_text;

        return $this;
    }

    public function getSecondPhoto(): ?string
    {
        return $this->second_photo;
    }

    public function setSecondPhoto(string $second_photo): self
    {
        $this->second_photo = $second_photo;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

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
}
