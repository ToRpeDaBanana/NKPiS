<?php

namespace App\Entity;

use App\Repository\CallScheduleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CallScheduleRepository::class)]
class CallSchedule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $first_pair = null;

    #[ORM\Column(length: 255)]
    private ?string $second_pair = null;

    #[ORM\Column(length: 255)]
    private ?string $third_pair = null;

    #[ORM\Column(length: 255)]
    private ?string $fourth_pair = null;

    #[ORM\Column(length: 255)]
    private ?string $fifth_pair = null;

    #[ORM\Column(length: 255)]
    private ?string $sixth_pair = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstPair(): ?string
    {
        return $this->first_pair;
    }

    public function setFirstPair(string $first_pair): static
    {
        $this->first_pair = $first_pair;

        return $this;
    }

    public function getSecondPair(): ?string
    {
        return $this->second_pair;
    }

    public function setSecondPair(string $second_pair): static
    {
        $this->second_pair = $second_pair;

        return $this;
    }

    public function getThirdPair(): ?string
    {
        return $this->third_pair;
    }

    public function setThirdPair(string $third_pair): static
    {
        $this->third_pair = $third_pair;

        return $this;
    }

    public function getFourthPair(): ?string
    {
        return $this->fourth_pair;
    }

    public function setFourthPair(string $fourth_pair): static
    {
        $this->fourth_pair = $fourth_pair;

        return $this;
    }

    public function getFifthPair(): ?string
    {
        return $this->fifth_pair;
    }

    public function setFifthPair(string $fifth_pair): static
    {
        $this->fifth_pair = $fifth_pair;

        return $this;
    }

    public function getSixthPair(): ?string
    {
        return $this->sixth_pair;
    }

    public function setSixthPair(string $sixth_pair): static
    {
        $this->sixth_pair = $sixth_pair;

        return $this;
    }
}
