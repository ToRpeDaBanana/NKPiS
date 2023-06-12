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

    #[ORM\Column]
    private ?bool $planned = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_planned = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isPlanned(): ?bool
    {
        return $this->planned;
    }

    public function setPlanned(bool $planned): self
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
