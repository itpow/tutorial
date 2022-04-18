<?php

namespace App\Entity;

use App\Repository\EvaluationServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvaluationServiceRepository::class)
 */
class EvaluationService
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $ip;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $grade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }
}
