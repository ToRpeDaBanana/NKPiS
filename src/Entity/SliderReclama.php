<?php

namespace App\Entity;

use App\Repository\SliderReclamaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SliderReclamaRepository::class)]
class SliderReclama
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(length: 255)]
    private ?string $photo_pc = null;

    #[ORM\Column(length: 255)]
    private ?string $photo_mobile = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getPhotoPc(): ?string
    {
        return $this->photo_pc;
    }

    public function setPhotoPc(string $photo_pc): static
    {
        $this->photo_pc = $photo_pc;

        return $this;
    }
    public function getPhotoMobile(): ?string
    {
        return $this->photo_mobile;
    }

    public function setPhotoMobile(string $photo_mobile): static
    {
        $this->photo_mobile = $photo_mobile;

        return $this;
    }
}
