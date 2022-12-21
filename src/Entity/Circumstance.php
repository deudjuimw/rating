<?php

namespace App\Entity;

use App\Repository\CircumstanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CircumstanceRepository::class)
 */
class Circumstance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Location::class)
     */
    private $place;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_and_time;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $why;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $how;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $what;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlace(): ?Location
    {
        return $this->place;
    }

    public function setPlace(?Location $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getDateAndTime(): ?\DateTimeInterface
    {
        return $this->date_and_time;
    }

    public function setDateAndTime(\DateTimeInterface $date_and_time): self
    {
        $this->date_and_time = $date_and_time;

        return $this;
    }

    public function getWhy(): ?string
    {
        return $this->why;
    }

    public function setWhy(?string $why): self
    {
        $this->why = $why;

        return $this;
    }

    public function getHow(): ?string
    {
        return $this->how;
    }

    public function setHow(?string $how): self
    {
        $this->how = $how;

        return $this;
    }

    public function getWhat(): ?string
    {
        return $this->what;
    }

    public function setWhat(string $what): self
    {
        $this->what = $what;

        return $this;
    }
}
