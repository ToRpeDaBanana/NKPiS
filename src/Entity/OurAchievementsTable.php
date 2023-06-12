<?php

namespace App\Entity;

use App\Repository\OurAchievementsTableRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OurAchievementsTableRepository::class)]
class OurAchievementsTable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $championship = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $count = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChampionship(): ?string
    {
        return $this->championship;
    }

    public function setChampionship(string $championship): self
    {
        $this->championship = $championship;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
}
