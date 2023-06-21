<?php

namespace App\Entity;

use App\Repository\ControlSovMeetingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ControlSovMeetingsRepository::class)]
class ControlSovMeetings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: false)]
    private ?string $planned = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_planned = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlanned(): ?string
    {
        return $this->planned;
    }

    public function setPlanned(string $planned): self
    {
        $this->planned = $planned;

        return $this;
    }

    public function getDatePlanned(): ?\DateTimeInterface
    {
        return $this->date_planned;
    }

    public function setDatePlanned(\DateTimeInterface $date_planned): self
    {
        $this->date_planned = $date_planned;

        return $this;
    }
}
