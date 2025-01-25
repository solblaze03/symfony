<?php


namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Centre
 *
 * @ORM\Table(name="centre", uniqueConstraints={@ORM\UniqueConstraint(name="codi", columns={"codi"})}, indexes={@ORM\Index(name="fk_regim_centre1_idx", columns={"regim_id"}), @ORM\Index(name="fk_provincia_centre1_idx", columns={"provincia_id"})})
 * @ORM\Entity
 */
class Centre
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
     * @var string
     *
     * @ORM\Column(name="codi", type="string", length=8, nullable=false)
     */
    private $codi = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="centre", type="string", length=150, nullable=true)
     */
    private $centre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="direccio", type="string", length=200, nullable=true)
     */
    private $direccio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localitat", type="string", length=150, nullable=true)
     */
    private $localitat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefon", type="string", length=12, nullable=true)
     */
    private $telefon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="query", type="string", length=255, nullable=true)
     */
    private $query;

    /**
     * @var \Regim
     *
     * @ORM\ManyToOne(targetEntity="Regim")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regim_id", referencedColumnName="id")
     * })
     */
    private $regim;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     * })
     */
    private $provincia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Cicle", mappedBy="centre")
     */
    private $cicle = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cicle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodi(): ?string
    {
        return $this->codi;
    }

    public function setCodi(string $codi): self
    {
        $this->codi = $codi;

        return $this;
    }

    public function getCentre(): ?string
    {
        return $this->centre;
    }

    public function setCentre(?string $centre): self
    {
        $this->centre = $centre;

        return $this;
    }

    public function getDireccio(): ?string
    {
        return $this->direccio;
    }

    public function setDireccio(?string $direccio): self
    {
        $this->direccio = $direccio;

        return $this;
    }

    public function getLocalitat(): ?string
    {
        return $this->localitat;
    }

    public function setLocalitat(?string $localitat): self
    {
        $this->localitat = $localitat;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(?string $telefon): self
    {
        $this->telefon = $telefon;

        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getRegim(): ?Regim
    {
        return $this->regim;
    }

    public function setRegim(?Regim $regim): self
    {
        $this->regim = $regim;

        return $this;
    }

    public function getProvincia(): ?Provincia
    {
        return $this->provincia;
    }

    public function setProvincia(?Provincia $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * @return Collection<int, Cicle>
     */
    public function getCicle(): Collection
    {
        return $this->cicle;
    }

    public function addCicle(Cicle $cicle): self
    {
        if (!$this->cicle->contains($cicle)) {
            $this->cicle[] = $cicle;
            $cicle->addCentre($this);
        }

        return $this;
    }

    public function removeCicle(Cicle $cicle): self
    {
        if ($this->cicle->removeElement($cicle)) {
            $cicle->removeCentre($this);
        }

        return $this;
    }

}
