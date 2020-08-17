<?php


namespace App\Controller;


interface Transform
{
    public function transform(string $string) : string;
}