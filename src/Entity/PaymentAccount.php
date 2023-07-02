<?php

namespace App\Entity;

use App\Repository\PaymentAccountRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentAccountRepository::class)]
class PaymentAccount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $otdel = null;

    #[ORM\Column(length: 255)]
    private ?string $number_payment = null;

    #[ORM\Column(length: 255)]
    private ?string $number_korr = null;

    #[ORM\Column(length: 255)]
    private ?string $bik = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getOtdel(): ?string
    {
        return $this->otdel;
    }

    public function setOtdel(?string $otdel): static
    {
        $this->otdel = $otdel;

        return $this;
    }

    public function getNumberPayment(): ?string
    {
        return $this->number_payment;
    }

    public function setNumberPayment(string $number_payment): static
    {
        $this->number_payment = $number_payment;

        return $this;
    }

    public function getNumberKorr(): ?string
    {
        return $this->number_korr;
    }

    public function setNumberKorr(string $number_korr): static
    {
        $this->number_korr = $number_korr;

        return $this;
    }

    public function getBik(): ?string
    {
        return $this->bik;
    }

    public function setBik(string $bik): static
    {
        $this->bik = $bik;

        return $this;
    }
}
