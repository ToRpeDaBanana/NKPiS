<?php

namespace App\Entity;

use App\Repository\InforRealizeDopEduDateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InforRealizeDopEduDateRepository::class)]
class InforRealizeDopEduDate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $data_revevance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataRevevance(): ?\DateTimeInterface
    {
        return $this->data_revevance;
    }

    public function setDataRevevance(\DateTimeInterface $data_revevance): static
    {
        $this->data_revevance = $data_revevance;

        return $this;
    }
}
