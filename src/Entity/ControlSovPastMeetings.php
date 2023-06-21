<?php

namespace App\Entity;

use App\Repository\ControlSovPastMeetingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ControlSovPastMeetingsRepository::class)]
class ControlSovPastMeetings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_past = null;

    #[ORM\Column(length: 255)]
    private ?string $agenda = null;

    #[ORM\Column(length: 255)]
    private ?string $protocol = null;

    #[ORM\Column(length: 255)]
    private ?string $link = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePast(): ?\DateTimeInterface
    {
        return $this->date_past;
    }

    public function setDatePast(\DateTimeInterface $date_past): self
    {
        $this->date_past = $date_past;

        return $this;
    }

    public function getAgenda(): ?string
    {
        return $this->agenda;
    }

    public function setAgenda(?string $agenda): self
    {
        $this->agenda = $agenda;

        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }
}
