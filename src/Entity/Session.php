<?php

namespace App\Entity;

use App\Repository\SessionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionRepository::class)
 */
class Session
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
    private $sess_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sess_data;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sess_lifetime;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sess_time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSessId(): ?int
    {
        return $this->sess_id;
    }

    public function setSessId(int $sess_id): self
    {
        $this->sess_id = $sess_id;

        return $this;
    }

    public function getSessData(): ?string
    {
        return $this->sess_data;
    }

    public function setSessData(string $sess_data): self
    {
        $this->sess_data = $sess_data;

        return $this;
    }

    public function getSessLifetime(): ?string
    {
        return $this->sess_lifetime;
    }

    public function setSessLifetime(string $sess_lifetime): self
    {
        $this->sess_lifetime = $sess_lifetime;

        return $this;
    }

    public function getSessTime(): ?string
    {
        return $this->sess_time;
    }

    public function setSessTime(string $sess_time): self
    {
        $this->sess_time = $sess_time;

        return $this;
    }
}
