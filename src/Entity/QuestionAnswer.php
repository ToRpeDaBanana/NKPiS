<?php

namespace App\Entity;

use App\Repository\QuestionAnswerRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionAnswerRepository::class)]

 #[ORM\HasLifecycleCallbacks()]

class QuestionAnswer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column(length: 1000)]
    private ?string $text_question = null;
    #[Assert\File(
        maxSize:"5M",  // ограничение на максимальный размер файла
    )]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $file = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name_answer = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $text_answer = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_answer = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getDateAnswer(): ?\DateTimeInterface
    {
        return $this->date_answer;
    }


    #[ORM\PreUpdate]


    public function setDateAnswer(): static
    {
        $this->date_answer = new \DateTime();

        return $this;
    }
    public function getTextAnswer(): ?string
    {
        return $this->text_answer;
    }

    public function setTextAnswer(string $text_answer): static
    {
        $this->text_answer = $text_answer;

        return $this;
    }
    public function getNameAnswer(): ?string
    {
        return $this->name_answer;
    }

    public function setNameAnswer(string $name_answer): static
    {
        $this->name_answer = $name_answer;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getTextQuestion(): ?string
    {
        return $this->text_question;
    }

    public function setTextQuestion(string $text_question): static
    {
        $this->text_question = $text_question;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): static
    {
        $this->file = $file;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }
}
