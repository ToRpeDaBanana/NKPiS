<?php

namespace App\Entity;

use App\Repository\AccessIsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccessIsRepository::class)]
class AccessIs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $accsess = null;

    #[ORM\Column(length: 255)]
    private ?string $speed = null;

    #[ORM\Column(length: 255)]
    private ?string $provider = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccsess(): ?string
    {
        return $this->accsess;
    }

    public function setAccsess(string $accsess): static
    {
        $this->accsess = $accsess;

        return $this;
    }

    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    public function setSpeed(string $speed): static
    {
        $this->speed = $speed;

        return $this;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(string $provider): static
    {
        $this->provider = $provider;

        return $this;
    }
}
