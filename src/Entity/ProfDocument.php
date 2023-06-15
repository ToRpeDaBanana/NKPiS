<?php

namespace App\Entity;

use App\Repository\ProfDocumentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfDocumentRepository::class)]
class ProfDocument
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $collective_agreement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $agreement_change = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $inform_about = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commission_documents = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $implementation_documents = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCollectiveAgreement(): ?string
    {
        return $this->collective_agreement;
    }

    public function setCollectiveAgreement(string $collective_agreement): static
    {
        $this->collective_agreement = $collective_agreement;

        return $this;
    }

    public function getAgreementChange(): ?string
    {
        return $this->agreement_change;
    }

    public function setAgreementChange(?string $agreement_change): static
    {
        $this->agreement_change = $agreement_change;

        return $this;
    }

    public function getInformAbout(): ?string
    {
        return $this->inform_about;
    }

    public function setInformAbout(?string $inform_about): static
    {
        $this->inform_about = $inform_about;

        return $this;
    }

    public function getCommissionDocuments(): ?string
    {
        return $this->commission_documents;
    }

    public function setCommissionDocuments(?string $commission_documents): static
    {
        $this->commission_documents = $commission_documents;

        return $this;
    }

    public function getImplementationDocuments(): ?string
    {
        return $this->implementation_documents;
    }

    public function setImplementationDocuments(?string $implementation_documents): static
    {
        $this->implementation_documents = $implementation_documents;

        return $this;
    }
}
