<?php

namespace App\Entity;

use App\Controller\Transform;
use App\Repository\MasterRepository;
use Doctrine\ORM\Mapping as ORM;
use Monolog\Logger;

/**
 * @ORM\Entity(repositoryClass=MasterRepository::class)
 */
class Master
{
    private int $id;
    private string $userInput;

    /**
     * Master constructor.
     * @param $userInput
     * @param Transform $transform
     * @param Logger $log
     */
    public function __construct($userInput, Transform $transform, Logger $log)
    {
        $this->userInput = $transform->transform($userInput);
        $log->info($this->userInput);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserInput(): string
    {
        return $this->userInput;
    }

    public function setUserInput(string $userInput): self
    {
        $this->userInput = $userInput;

        return $this;
    }

}
