<?php


namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cicle
 *
 * @ORM\Table(name="cicle")
 * @ORM\Entity
 */
class Cicle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codi", type="string", length=5, nullable=true)
     */
    private $codi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Centre", inversedBy="cicle")
     * @ORM\JoinTable(name="cicle_centre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cicle_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="centre_id", referencedColumnName="id")
     *   }
     * )
     */
    private $centre = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->centre = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodi(): ?string
    {
        return $this->codi;
    }

    public function setCodi(?string $codi): self
    {
        $this->codi = $codi;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Centre>
     */
    public function getCentre(): Collection
    {
        return $this->centre;
    }

    public function addCentre(Centre $centre): self
    {
        if (!$this->centre->contains($centre)) {
            $this->centre[] = $centre;
        }

        return $this;
    }

    public function removeCentre(Centre $centre): self
    {
        $this->centre->removeElement($centre);

        return $this;
    }

}
