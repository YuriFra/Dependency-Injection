<?php

namespace App\Entity;

use App\Controller\Transform;
use App\Repository\CapitalizeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CapitalizeRepository::class)
 */
class Capitalize implements Transform
{
    private int $id;
    private string $string;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getString(): string
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
        $length = strlen($string);
        for ($i = 0; $i < $length; $i += 2) {
            $string[$i] = strtoupper($string[$i]);
        }
        return $string;
    }
}
