<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NiveauRepository")
 */
class Niveau
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
     * @ORM\Column(type="time")
     */
    private $horaire;

    /**
     * @ORM\Column(type="time")
     */
    private $horaireFin;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DanseApprise", mappedBy="niveau",
     * cascade={"remove"}))
     */
    private $danses;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CoursSupplementaire", mappedBy="niveau")
     */
    private $coursSupplementaires;

    public function __construct()
    {
        $this->danses = new ArrayCollection();
        $this->coursSupplementaires = new ArrayCollection();
    }

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

    public function getHoraire(): ?\DateTimeInterface
    {
        return $this->horaire;
    }

    public function setHoraire(\DateTimeInterface $horaire): self
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function getHoraireFin(): ?\DateTimeInterface
    {
        return $this->horaireFin;
    }

    public function setHoraireFin(\DateTimeInterface $horaireFin): self
    {
        $this->horaireFin = $horaireFin;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|DanseApprise[]
     */
    public function getDanses(): Collection
    {
        return $this->danses;
    }

    public function addDanse(DanseApprise $danse): self
    {
        if (!$this->danses->contains($danse)) {
            $this->danses[] = $danse;
            $danse->setNiveau($this);
        }

        return $this;
    }

    public function removeDanse(DanseApprise $danse): self
    {
        if ($this->danses->contains($danse)) {
            $this->danses->removeElement($danse);
            // set the owning side to null (unless already changed)
            if ($danse->getNiveau() === $this) {
                $danse->setNiveau(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CoursSupplementaire[]
     */
    public function getCoursSupplementaires(): Collection
    {
        return $this->coursSupplementaires;
    }

    public function addCoursSupplementaire(CoursSupplementaire $coursSupplementaire): self
    {
        if (!$this->coursSupplementaires->contains($coursSupplementaire)) {
            $this->coursSupplementaires[] = $coursSupplementaire;
            $coursSupplementaire->addNiveau($this);
        }

        return $this;
    }

    public function removeCoursSupplementaire(CoursSupplementaire $coursSupplementaire): self
    {
        if ($this->coursSupplementaires->contains($coursSupplementaire)) {
            $this->coursSupplementaires->removeElement($coursSupplementaire);
            $coursSupplementaire->removeNiveau($this);
        }

        return $this;
    }
}
