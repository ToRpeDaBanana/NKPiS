<?php

namespace App\Entity;

use App\Repository\InfPayRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfPayRepository::class)]
class InfPay
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $inn = null;

    #[ORM\Column(length: 255)]
    private ?string $kpp = null;

    #[ORM\Column(length: 255)]
    private ?string $okato = null;

    #[ORM\Column(length: 255)]
    private ?string $ogrn = null;

    #[ORM\Column(length: 255)]
    private ?string $oktmo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(string $inn): static
    {
        $this->inn = $inn;

        return $this;
    }

    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    public function setKpp(string $kpp): static
    {
        $this->kpp = $kpp;

        return $this;
    }

    public function getOkato(): ?string
    {
        return $this->okato;
    }

    public function setOkato(string $okato): static
    {
        $this->okato = $okato;

        return $this;
    }

    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    public function setOgrn(string $ogrn): static
    {
        $this->ogrn = $ogrn;

        return $this;
    }

    public function getOktmo(): ?string
    {
        return $this->oktmo;
    }

    public function setOktmo(string $oktmo): static
    {
        $this->oktmo = $oktmo;

        return $this;
    }
}
