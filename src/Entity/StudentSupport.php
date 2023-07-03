<?php

namespace App\Entity;

use App\Repository\StudentSupportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentSupportRepository::class)]
class StudentSupport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1000)]
    private ?string $text = null;

    #[ORM\Column(length: 255)]
    private ?string $graduates = null;
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: false)]
    private ?\DateTimeInterface $graduate_employment = null;

    #[ORM\Column]
    private ?int $boys = null;

    #[ORM\Column]
    private ?int $girls = null;

    #[ORM\Column]
    private ?int $ovz = null;

    #[ORM\Column]
    private ?int $actual_employment = null;

    #[ORM\Column]
    private ?int $actual_employment_prof = null;

    #[ORM\Column]
    private ?int $continue_edu_vyz = null;

    #[ORM\Column]
    private ?int $continue_edu_spo = null;

    #[ORM\Column]
    private ?int $other = null;

    #[ORM\Column]
    private ?int $vs_rf = null;

    #[ORM\Column]
    private ?int $dtiz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getGraduates(): ?string
    {
        return $this->graduates;
    }

    public function setGraduates(string $graduates): static
    {
        $this->graduates = $graduates;

        return $this;
    }
    public function getGraduateEmployment(): ?\DateTimeInterface
    {
        return $this->graduate_employment;
    }

    public function setGraduateEmployment(\DateTimeInterface $graduate_employment): self
    {
        $this->graduate_employment = $graduate_employment;

        return $this;
    }

    public function getBoys(): ?int
    {
        return $this->boys;
    }

    public function setBoys(int $boys): static
    {
        $this->boys = $boys;

        return $this;
    }

    public function getGirls(): ?int
    {
        return $this->girls;
    }

    public function setGirls(int $girls): static
    {
        $this->girls = $girls;

        return $this;
    }

    public function getOvz(): ?int
    {
        return $this->ovz;
    }

    public function setOvz(int $ovz): static
    {
        $this->ovz = $ovz;

        return $this;
    }

    public function getActualEmployment(): ?int
    {
        return $this->actual_employment;
    }

    public function setActualEmployment(int $actual_employment): static
    {
        $this->actual_employment = $actual_employment;

        return $this;
    }

    public function getActualEmploymentProf(): ?int
    {
        return $this->actual_employment_prof;
    }

    public function setActualEmploymentProf(int $actual_employment_prof): static
    {
        $this->actual_employment_prof = $actual_employment_prof;

        return $this;
    }

    public function getContinueEduVyz(): ?int
    {
        return $this->continue_edu_vyz;
    }

    public function setContinueEduVyz(int $continue_edu_vyz): static
    {
        $this->continue_edu_vyz = $continue_edu_vyz;

        return $this;
    }

    public function getContinueEduSpo(): ?int
    {
        return $this->continue_edu_spo;
    }

    public function setContinueEduSpo(int $continue_edu_spo): static
    {
        $this->continue_edu_spo = $continue_edu_spo;

        return $this;
    }

    public function getOther(): ?int
    {
        return $this->other;
    }

    public function setOther(int $other): static
    {
        $this->other = $other;

        return $this;
    }

    public function getVsRf(): ?int
    {
        return $this->vs_rf;
    }

    public function setVsRf(int $vs_rf): static
    {
        $this->vs_rf = $vs_rf;

        return $this;
    }

    public function getDtiz(): ?int
    {
        return $this->dtiz;
    }

    public function setDtiz(int $dtiz): static
    {
        $this->dtiz = $dtiz;

        return $this;
    }
}
