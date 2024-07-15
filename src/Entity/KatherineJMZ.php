<?php

namespace App\Entity;

use App\Repository\KatherineJMZRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KatherineJMZRepository::class)
 */
class KatherineJMZ
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Katherine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKatherine(): ?string
    {
        return $this->Katherine;
    }

    public function setKatherine(?string $Katherine): self
    {
        $this->Katherine = $Katherine;

        return $this;
    }
}
