<?php

namespace App\Entity;

use App\Controller\Transform;
use App\Repository\ChangeSpacesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChangeSpacesRepository::class)
 */
class ChangeSpaces implements Transform
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
    private $string;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getString(): ?string
    {
        return $this->string;
    }

    public function setString(string $string): self
    {
        $this->string = $string;

        return $this;
    }

    public function transform(string $string): string
    {
        return str_replace(" ", "-", $string);
    }
}
