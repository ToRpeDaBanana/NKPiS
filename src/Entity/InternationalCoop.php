<?php

namespace App\Entity;

use App\Repository\InternationalCoopRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InternationalCoopRepository::class)]
class InternationalCoop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $inform_contract = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $inform_dogovor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInformContract(): ?string
    {
        return $this->inform_contract;
    }

    public function setInformContract(?string $inform_contract): static
    {
        $this->inform_contract = $inform_contract;

        return $this;
    }

    public function getInformDogovor(): ?string
    {
        return $this->inform_dogovor;
    }

    public function setInformDogovor(?string $inform_dogovor): static
    {
        $this->inform_dogovor = $inform_dogovor;

        return $this;
    }
}
