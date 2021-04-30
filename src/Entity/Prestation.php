<?php

namespace App\Entity;

use App\Repository\PrestationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrestationRepository::class)
 */
class Prestation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $montage;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $depannage;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $equilibre;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $valve;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $plaquette;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $disque;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $vidange;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontage(): ?string
    {
        return $this->montage;
    }

    public function setMontage(?string $montage): self
    {
        $this->montage = $montage;

        return $this;
    }

    public function getDepannage(): ?string
    {
        return $this->depannage;
    }

    public function setDepannage(?string $depannage): self
    {
        $this->depannage = $depannage;

        return $this;
    }

    public function getEquilibre(): ?string
    {
        return $this->equilibre;
    }

    public function setEquilibre(?string $equilibre): self
    {
        $this->equilibre = $equilibre;

        return $this;
    }

    public function getValve(): ?string
    {
        return $this->valve;
    }

    public function setValve(?string $valve): self
    {
        $this->valve = $valve;

        return $this;
    }

    public function getPlaquette(): ?string
    {
        return $this->plaquette;
    }

    public function setPlaquette(?string $plaquette): self
    {
        $this->plaquette = $plaquette;

        return $this;
    }

    public function getDisque(): ?string
    {
        return $this->disque;
    }

    public function setDisque(?string $disque): self
    {
        $this->disque = $disque;

        return $this;
    }

    public function getVidange(): ?string
    {
        return $this->vidange;
    }

    public function setVidange(?string $vidange): self
    {
        $this->vidange = $vidange;

        return $this;
    }
}
