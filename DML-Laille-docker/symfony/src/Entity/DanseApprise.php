<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DanseAppriseRepository")
 * @Vich\Uploadable
 */
class DanseApprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="date")
     */
    private $danceDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $youtubeLink;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Niveau", inversedBy="danses")
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DanseRevisee", mappedBy="danseApprise",
     * cascade={"remove"})
     */
    private $danseRevisees;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $brochure;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="brochure", fileNameProperty="brochure")
     *
     * @var File
     */
    private $imageFile;


    public function __construct()
    {
        $this->danseRevisees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDanceDate(): ?\DateTimeInterface
    {
        return $this->danceDate;
    }

    public function setDanceDate(\DateTimeInterface $danceDate): self
    {
        $this->danceDate = $danceDate;

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

    public function getNiveau(): ?Niveau
    {
        return $this->niveau;
    }

    public function setNiveau(?Niveau $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * @return Collection|DanseRevisee[]
     */
    public function getDanseRevisees(): Collection
    {
        return $this->danseRevisees;
    }

    public function addDanseRevisee(DanseRevisee $danseRevisee): self
    {
        if (!$this->danseRevisees->contains($danseRevisee)) {
            $this->danseRevisees[] = $danseRevisee;
            $danseRevisee->setDanseApprise($this);
        }

        return $this;
    }

    public function removeDanseRevisee(DanseRevisee $danseRevisee): self
    {
        if ($this->danseRevisees->contains($danseRevisee)) {
            $this->danseRevisees->removeElement($danseRevisee);
            // set the owning side to null (unless already changed)
            if ($danseRevisee->getDanseApprise() === $this) {
                $danseRevisee->setDanseApprise(null);
            }
        }

        return $this;
    }


  public function getBrochure(): ?string
  {
      return $this->brochure;
  }

  public function setBrochure(?string $brochure): self
  {
      $this->brochure = $brochure;

      return $this;
  }

  /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|UploadedFile $image
     */
    public function setImageFile(?File $image = null)
    {
        $this->imageFile = $image;

    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }


}
