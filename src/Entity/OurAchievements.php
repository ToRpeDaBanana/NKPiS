<?php

namespace App\Entity;

use App\Repository\OurAchievementsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OurAchievementsRepository::class)]
class OurAchievements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 1000)]
    private ?string $first_text = null;

    #[ORM\Column(length: 255)]
    private ?string $title_table = null;

    #[ORM\Column(length: 1000)]
    private ?string $second_text = null;

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

    public function getTitleTable(): ?string
    {
        return $this->title_table;
    }

    public function setTitleTable(string $title_table): self
    {
        $this->title_table = $title_table;

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

}
