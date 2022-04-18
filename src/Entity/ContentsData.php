<?php

namespace App\Entity;

use App\Repository\ContentsDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContentsDataRepository::class)
 */
class ContentsData
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $tutorial_contents_id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTutorialContentsId(): ?int
    {
        return $this->tutorial_contents_id;
    }

    public function setTutorialContentsId(int $tutorial_contents_id): self
    {
        $this->tutorial_contents_id = $tutorial_contents_id;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
