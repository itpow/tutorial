<?php

namespace App\Entity;

use App\Repository\TutorialContentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TutorialContentsRepository::class)
 */
class TutorialContents
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $tutorial_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTutorialId(): ?int
    {
        return $this->tutorial_id;
    }

    public function setTutorialId(int $tutorial_id): self
    {
        $this->tutorial_id = $tutorial_id;

        return $this;
    }
}
