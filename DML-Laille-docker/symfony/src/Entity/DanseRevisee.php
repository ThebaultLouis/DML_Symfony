<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DanseReviseeRepository")
 */
class DanseRevisee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $youtubeLink;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DanseApprise", inversedBy="danseRevisees")
     */
    private $danseApprise;

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

    public function getYoutubeLink(): ?string
    {
        return $this->youtubeLink;
    }

    public function setYoutubeLink(?string $youtubeLink): self
    {
        $this->youtubeLink = $youtubeLink;

        return $this;
    }

    public function getDanseApprise(): ?DanseApprise
    {
        return $this->danseApprise;
    }

    public function setDanseApprise(?DanseApprise $danseApprise): self
    {
        $this->danseApprise = $danseApprise;

        return $this;
    }
}
